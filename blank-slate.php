<?php
/**
 * Plugin Name: Blank Slate
 * Description: Provides a blank page template for use with WordPress page builders.
 * Plugin URI:  https://wpblankslate.com/
 * Version:     1.1.5
 * Author:      Aaron Reimann
 * Author URI:  https://aaronreimann.com/
 * Requires at least: 4.7
 * Requires PHP: 5.3
 * Text Domain: blank-slate
 * Domain Path: languages
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2019-2020 by Aaron Reimann & Micah Wood - All rights reserved.
 *
 * @package BlankSlate
 */

require __DIR__ . '/functions.php';

add_action( 'plugins_loaded', 'blank_slate_bootstrap' );
