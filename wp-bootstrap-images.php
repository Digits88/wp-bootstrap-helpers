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

		// Uncomment to auto add Responsive class to all images.
		// add_filter( 'get_image_tag_class', array( $this, 'image_responsive_class' ) );

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

	/**
	 * image_rounded_class function.
	 *
	 * @access public
	 * @param mixed $class
	 * @return void
	 */
	function image_rounded_class( $class ) {
		$class .= ' img-rounded';
		return $class;
	}

	/**
	 * image_circle_class function.
	 *
	 * @access public
	 * @param mixed $class
	 * @return void
	 */
	function image_circle_class( $class ) {
		$class .= ' img-circle';
		return $class;
	}

	/**
	 * image_thumbnail_class function.
	 *
	 * @access public
	 * @param mixed $class
	 * @return void
	 */
	function image_thumbnail_class( $class ) {
		$class .= ' img-thumbnail';
		return $class;
	}
}

new WP_Bootstrap_Images();
