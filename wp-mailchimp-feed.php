<?php
/**
 * @package WP_MailChimp_Feed
 *
 * @wordpress-plugin
 * Plugin Name: WP MailChimp Feed
 * Plugin URI: https://github.com/manovotny/wp-mailchimp-feed
 * Description: Adds a WordPress feed for MailChimp for better content control.
 * Version: 1.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-mailchimp-feed
 * GitHub Plugin URI: https://github.com/manovotny/wp-mailchimp-feed
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Libraries
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/lib/wp-dom-util/wp-dom-util.php';

/* Classes
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'WP_MailChimp_Feed' ) ) {

    require_once __DIR__ . '/classes/class-wp-mailchimp-feed.php';

    WP_MailChimp_Feed::get_instance();

}