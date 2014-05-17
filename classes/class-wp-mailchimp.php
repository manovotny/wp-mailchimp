<?php
/**
 * @package WP_MailChimp
 * @author Michael Novotny <manovotny@gmail.com>
 */

class WP_MailChimp {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_MailChimp
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_MailChimp Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

}
