<?php
/**
 * @package WP_MialChimp
 * @author Michael Novotny <manovotny@gmail.com>
 */

add_action( 'init', 'wp_mailchimp_add_feed' );

/**
 * Adds MailChimp feed.
 */
function wp_mailchimp_add_feed() {

    add_feed( 'mailchimp', 'wp_mailchimp_feed' );

}

/**
 * Defines MailChimp feed behavior.
 */
function wp_mailchimp_feed() {

    add_filter( 'the_content_feed', 'wp_mailchimp_feed_content' );

    include ABSPATH . '/wp-includes/feed-rss2.php';

}

/**
 * Creates MailChimp feed content.
 *
 * Most notably, it adds necessary inline styles to whip email templates into shape.
 *
 * @param string $content Post content.
 * @return string Modified post content, specific to the MailChimp feed.
 */
function wp_mailchimp_feed_content( $content ) {

    $qp_content = htmlqp( $content );

    $images = $qp_content->find( 'img' );

    foreach ( $images as $image ) {

        $image->attr( 'style', 'max-width: 100%;');

    }

    return $qp_content->find( 'body' )->innerHTML();

}