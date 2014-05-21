<?php
/**
 * @package WP_DOM_Util
 * @author Michael Novotny <manovotny@gmail.com>
 */

class WP_DOM_Util {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_DOM_Util
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_DOM_Util Instance of the class.
     */
    public static function get_instance() {

        // Check if an instance has not been created yet.
        if ( null == self::$instance ) {

            // Set instance of class.
            self::$instance = new self;

        }

        // Return instance.
        return self::$instance;

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    /* Public
    ---------------------------------------------- */

    /**
     * Gets the inner HTML of a given DOMElement.
     *
     * @param DOMElement $element Element to get the inner HTML from.
     * @return string String representation of the inner HTML.
     */
    function get_inner_html( DOMElement $element ) {

        $inner_html= '';

        $children = $element->childNodes;

        foreach ( $children as $child ) {

            $inner_html .= $child->ownerDocument->saveXML( $child );

        }

        return $inner_html;

    }

    /**
     * Gets HTML meta tags based on WordPress settings.
     *
     * @return string HTML meta tags based on WordPress settings.
     */
    function get_meta() {

        $html_type = get_bloginfo( 'html_type' );
        $charset = get_bloginfo( 'charset' );

        return '<meta http-equiv="Content-Type" content="' . $html_type . '; charset=' . $charset . '" />';

    }
}
