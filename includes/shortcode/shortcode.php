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
            'show_arrows' => 'false',
            'show_dots' => 'false',
            'autoplay' => 'true',
            'autoplay_speed' => '3000',

		),
		$atts,
		'ztgroup_testimonial_tag'
	);
    $desktop = $atts['desktop'];
    $tablet = $atts['tablet'];
    $mobile = $atts['mobile'];
    $category = $atts['category'];
    $show_arrows = $atts['show_arrows']== 'true' ? 'true' : 'false';
    $show_dots = $atts['show_dots']== 'true' ? 'true' : 'false';
    $autoplay = $atts['autoplay'];
    $autoplay_speed = $atts['autoplay_speed'];
    ?>
    <div 
        class="testimonial-carousel" 
        data-desktop="<?php echo $desktop; ?>"
        data-tablet="<?php echo $tablet; ?>"
        data-mobile="<?php echo $mobile; ?>"
        data-arrow="<?php echo $show_arrows; ?>"
        data-dots="<?php echo $show_dots; ?>"
        data-autoplay="<?php echo $autoplay; ?>"
        data-speed="<?php echo $autoplay_speed; ?>">
        <div class="testimonial-carousel-container">
            <div class="testimonial-carousel-wrapper">
               test
            </div>
        </div>
    </div>
    
    <?php

}
add_shortcode( 'ztgroup_testimonial_tag', 'ztgroup_testimonial_function' );