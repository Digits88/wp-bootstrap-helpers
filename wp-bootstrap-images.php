<?php
/**
 * Bootstrap Images
 *
 * @package client-template-theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }


/**
 * WP_Bootstrap_Images class.
 */
class WP_Bootstrap_Images {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		// add_filter( 'get_image_tag_class', array( $this, 'responsive_image_class' ) );

	}

	/**
	 * Bootstrap_responsive_image function.
	 *
	 * @access public
	 * @param mixed $class Classes.
	 * @return $class Classes.
	 */
	function image_responsive_class( $class ) {
		$class .= ' img-responsive';
		return $class;
	}
	
	function image_rounded_class( $class ) {
		$class .= ' img-rounded';
		return $class;
	}
}

new WP_Bootstrap_Images();
