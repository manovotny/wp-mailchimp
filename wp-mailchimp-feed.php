<?php
/**
 * @package WP_MailChimp_Feed
 *
 * @wordpress-plugin
 * Plugin Name: WP MailChimp Feed
 * Plugin URI: https://github.com/manovotny/wp-mailchimp-feed
 * Description: Adds a WordPress feed for MailChimp for better content control.
 * Version: 1.1.1
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-mailchimp-feed
 * GitHub Plugin URI: https://github.com/manovotny/wp-mailchimp-feed
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';