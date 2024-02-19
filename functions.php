<?php
Namespace ZtgroupTestimonialSlider;

class InitPlugin{
    public function __construct(){
        add_action('wp_enqueue_scripts', array($this, 'scripts_and_styles'));
     
    }
    public function scripts_and_styles(){
        wp_enqueue_style('ztgroup-testimonial-slider', ZTGROUP_TESTIMONIAL_SLIDER_URL .'assets/css/styles.css', array(), ZTGROUP_TESTIMONIAL_SLIDER_VERSION);
        wp_enqueue_script('ztgroup-testimonial-slider', ZTGROUP_TESTIMONIAL_SLIDER_URL . 'assets/js/scripts.js', array(), ZTGROUP_TESTIMONIAL_SLIDER_VERSION, true);
    }

    

}
new InitPlugin();

function  ztgroup_activation_plugin_hook(){
      
    ztgroup_testimonial_post_type();
    flush_rewrite_rules();

}

register_activation_hook(
    __FILE__,
    'ztgroup_activation_plugin_hook'
);


function ztgroup_deactivate_hook() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( 'ztgroup_testimonials' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'ztgroup_deactivate_hook' );

require ZTGROUP_TESTIMONIAL_SLIDER_PATH . 'includes/post-types/testimonials.php';
require ZTGROUP_TESTIMONIAL_SLIDER_PATH . 'includes/taxonomia/testimonial-categories.php';
require ZTGROUP_TESTIMONIAL_SLIDER_PATH . 'includes/metada/metadata.php';
require ZTGROUP_TESTIMONIAL_SLIDER_PATH . 'includes/shortcode/shortcode.php';