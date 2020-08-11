<?php
/**
 * Blank Slate
 *
 * @package           BlankSlate
 * @author            Micah Wood
 * @copyright         Copyright 2019-2020 by Aaron Reimann & Micah Wood - All rights reserved.
 * @license           GPL2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Blank Slate
 * Plugin URI:        https://wpblankslate.com
 * Description:       Provides a blank page template for use with WordPress page builders.
 * Version:           1.2
 * Requires PHP:      5.3
 * Requires at least: 4.7
 * Author:            Aaron Reimann
 * Author URI:        https://aaronreimann.com
 * Text Domain:       blank-slate
 * Domain Path:       /languages
 * License:           GPL V2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

require __DIR__ . '/functions.php';

add_action( 'plugins_loaded', 'blank_slate_bootstrap' );
