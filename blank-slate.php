<?php

/**
 * Plugin Name: Blank Slate
 * Plugin URI:  http://aaronreimann.com/wordpress
 * Version:     1.1.4
 * Description: This plugin creates a page template giving you a blank page so “the_content()” of the page is all that is displayed, no header, no footer.
 * Author:      Aaron Reimann
 * Author URI:  http://aaronreimann.com/wordpress
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: blank-slate
 * Domain Path: /languages
 */

require __DIR__ . '/functions.php';

add_action( 'plugins_loaded', 'blank_slate_bootstrap' );
