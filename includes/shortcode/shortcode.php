<?php
// Add Shortcode
function ztgroup_testimonial_function( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'desktop' => '4',
			'tablet' => '3',
			'mobile' => '1',
            'category' => '',
            'autoplay' => 'true',
            'autoplay_speed' => '5000',
            'speed' => '1000',
            'loop' => 'true',
            'pagination' => 'false',
            'navigation' => 'false',
            'rating' => 'false',

		),
		$atts,
		'ztgroup_testimonial_tag'
	);
    $desktop = $atts['desktop'];
    $tablet = $atts['tablet'];
    $mobile = $atts['mobile'];
    $category = $atts['category'];
    $autoplay = $atts['autoplay'];
    $autoplay_speed = $atts['autoplay_speed'];
    $speed = $atts['speed'];
    $loop = $atts['loop'];
    $pagination = $atts['pagination'];
    $navigation = $atts['navigation'];
    set_query_var('rating', $atts['rating']);

    ob_start();
    
    ?>
    <div class="testimonial-wrapper">
        <div 
            class="testimonial-carousel" 
            data-desktop="<?php echo $desktop; ?>"
            data-tablet="<?php echo $tablet; ?>"
            data-mobile="<?php echo $mobile; ?>"
            data-autoplay="<?php echo $autoplay; ?>"
            data-autoplayspeed = "<?php echo $autoplay_speed; ?>"
            data-speed="<?php echo $speed; ?>"
            data-pagination="<?php echo $pagination; ?>"
            data-navigation="<?php echo $navigation; ?>"
            data-loop="<?php echo $loop; ?>">
        
                <div class="swiper-wrapper">
                    <!-- <div class="testimonial-slide">test</div> -->
                    <?php
                    $argA = array(
                        'post_type' => 'ztgroup_testimonials',
                        'posts_per_page' => -1.
                    );
                    $argB = array(
                        'post_type' => 'ztgroup_testimonials',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'zt_testimonial_category',
                            'field' => 'slug',
                            'terms' => $category,
                            ),
                        ),
                    );
                    $args = $category == '' ? $argA : $argB;
                    $query = new WP_Query($args);

                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                            ztgroup_template_part('slide');
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php if($pagination == 'true'): ?>
                    <div class="testimonial-pagination"></div>
                <?php endif; ?>
            </div>
            <?php if($navigation == 'true'): ?>
                <button class="testimonial-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                </button> 
                <button class="testimonial-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </button>         
            <?php endif; ?>
    </div>
    
    <?php
    return ob_get_clean();
}
add_shortcode( 'ztgroup_testimonial_tag', 'ztgroup_testimonial_function' );