<?php

if ( ! function_exists( 'blank_slate_bootstrap' ) ) {

	/**
	 * Initialize the plugin.
	 */
	function blank_slate_bootstrap() {

		load_plugin_textdomain( 'blank-slate', false, __DIR__ . '/languages' );

		// Register the blank slate template
		blank_slate_add_template(
			'blank-slate-template.php',
			esc_html__( 'Blank Slate', 'blank-slate' )
		);

		// Add our template(s) to the dropdown in the admin
		add_filter(
			'theme_page_templates',
			function ( array $templates ) {
				return array_merge( $templates, blank_slate_get_templates() );
			}
		);

		// Ensure our template is loaded on the front end
		add_filter(
			'template_include',
			function ( $template ) {

				if ( is_singular() ) {

					$assigned_template = get_post_meta( get_the_ID(), '_wp_page_template', true );

					if ( blank_slate_get_template( $assigned_template ) ) {

						if ( file_exists( $assigned_template ) ) {
							return $assigned_template;
						}

						$file = wp_normalize_path( plugin_dir_path( __FILE__ ) . '/templates/' . $assigned_template );

						if ( file_exists( $file ) ) {
							return $file;
						}
					}
				}

				return $template;

			}
		);

	}
}

if ( ! function_exists( 'blank_slate_get_templates' ) ) {

	/**
	 * Get all registered templates.
	 *
	 * @return array
	 */
	function blank_slate_get_templates() {
		return (array) apply_filters( 'blank_slate_templates', array() );
	}
}

if ( ! function_exists( 'blank_slate_get_template' ) ) {

	/**
	 * Get a registered template.
	 *
	 * @param string $file Template file/path
	 *
	 * @return string|null
	 */
	function blank_slate_get_template( $file ) {
		$templates = blank_slate_get_templates();

		return isset( $templates[ $file ] ) ? $templates[ $file ] : null;
	}
}

if ( ! function_exists( 'blank_slate_add_template' ) ) {

	/**
	 * Register a new template.
	 *
	 * @param string $file Template file/path
	 * @param string $label Label for the template
	 */
	function blank_slate_add_template( $file, $label ) {
		add_filter(
			'blank_slate_templates',
			function ( array $templates ) use ( $file, $label ) {
				$templates[ $file ] = $label;

				return $templates;
			}
		);
	}
}
