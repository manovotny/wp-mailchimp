<?php
/**
 * @package WP_MailChimp
 */

class WP_MailChimp_Feed {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_MailChimp_Feed
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_MailChimp_Feed Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_action( 'init', array( $this, 'initialize_mailchimp_feed' ) );

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    /**
     * Initializes MailChimp feed.
     */
    public function initialize_mailchimp_feed() {

        add_filter( 'the_content_feed', array( $this, 'initialize_mailchimp_feed_content' ) );

        include ABSPATH . '/wp-includes/feed-rss2.php';

    }

    /**
     * Initializes MailChimp feed content.
     */
    public function initialize_mailchimp_feed_content() {

        add_filter( 'the_content_feed', array( $this, 'display_mailchimp_feed' ) );

    }

    /**
     * Displays MailChimp feed.
     *
     * Most notably, it adds necessary inline styles to whip email templates into shape.
     *
     * @param string $content Post content.
     * @return string Modified post content, specific to the MailChimp feed.
     */
    public function display_mailchimp_feed( $content ) {

        $dom_util = WP_DOM_Util::get_instance();

        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->LoadHTML( $dom_util->get_meta() . $content );

        $images = $dom->getElementsByTagName( 'img' );

        foreach ( $images as $image ) {

            $image->setAttribute( 'style', 'max-width: 100%;' );

        }

        $content = $dom_util->get_inner_html( $dom->getElementsByTagName( 'body' )->item( 0 ) );

        return $content;

    }

}
