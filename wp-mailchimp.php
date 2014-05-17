<?php
/**
 * TODO
 *
 * @package WP_MailChimp
 * @author Michael Novotny <manovotny@gmail.com>
 * @license GPL-3.0+
 * @link https://github.com/manovotny/wp-mailchimp
 * @copyright 2014 Michael Novotny
 *
 * @wordpress-plugin
 * Plugin Name: WP MailChimp
 * Plugin URI: https://github.com/manovotny/wp-mailchimp
 * Description: TODO
 * Version: 0.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * GitHub Plugin URI: https://github.com/manovotny/wp-mailchimp
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Classes
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/classes/class-wp-mailchimp.php';

/* Includes
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/inc/email-feed.php';