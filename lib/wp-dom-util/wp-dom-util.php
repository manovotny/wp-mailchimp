<?php
/**
 * A PHP DOM utility for WordPress.
 *
 * @package WP_DOM_Util
 * @author Michael Novotny <manovotny@gmail.com>
 * @license GPL-3.0+
 * @link https://github.com/manovotny/wp-dom-utl
 * @copyright 2014 Michael Novotny
 *
 * @wordpress-plugin
 * Plugin Name: WP DOM Util
 * Plugin URI: https://github.com/manovotny/wp-dom-utl
 * Description: A PHP DOM utility for WordPress.
 * Version: 0.1.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * GitHub Plugin URI: https://github.com/manovotny/wp-dom-utl
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Classes
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'WP_DOM_Util' ) ) {

    require_once __DIR__ . '/classes/class-wp-dom-util.php';

}