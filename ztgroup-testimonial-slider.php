<?php
/**
 * ZT Group Testimonial Slider
 *
 * @package           ZtgroupTestimonialSlider
 * @author            Juan Carlos Avila Pérez
 * @copyright         2024, Zt Group
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       ZT Group Testimonial Slider
 * Description:       A simple plugin for ZT Group Testimonial Slider.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Juan Carlos Avila Pérez
 * Text Domain:       ztgroup-testimonial-slider
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * constants
 */
defined( 'ZTGROUP_TESTIMONIAL_SLIDER_VERSION' ) || define( 'ZTGROUP_TESTIMONIAL_SLIDER_VERSION', '1.0.0' );
defined( 'ZTGROUP_TESTIMONIAL_SLIDER_URL' ) || define( 'ZTGROUP_TESTIMONIAL_SLIDER_URL', plugin_dir_url( __FILE__ ) );
defined( 'ZTGROUP_TESTIMONIAL_SLIDER_PATH' ) || define( 'ZTGROUP_TESTIMONIAL_SLIDER_PATH', plugin_dir_path( __FILE__ ) );




if(file_exists( ZTGROUP_TESTIMONIAL_SLIDER_PATH . '/functions.php' )){
    require_once ZTGROUP_TESTIMONIAL_SLIDER_PATH . '/functions.php';
}

?>