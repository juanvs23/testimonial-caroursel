<?php
/**
 * Retrieving the values:
 * Name = get_post_meta( get_the_ID(), 'ztgroup_name', true )
 * Job position = get_post_meta( get_the_ID(), 'ztgroup_job-position', true )
 * Company = get_post_meta( get_the_ID(), 'ztgroup_company', true )
 * City = get_post_meta( get_the_ID(), 'ztgroup_city', true )
 * Rating = get_post_meta( get_the_ID(), 'ztgroup_rating', true )
 */
 $name = get_post_meta( get_the_ID(), 'ztgroup_name', true );
 $job_position = get_post_meta( get_the_ID(), 'ztgroup_job-position', true );
 $company = get_post_meta( get_the_ID(), 'ztgroup_company', true );
 $city = get_post_meta( get_the_ID(), 'ztgroup_city', true );
 $rating = get_post_meta( get_the_ID(), 'ztgroup_rating', true );
 
 $feature_image = get_the_post_thumbnail_url( get_the_ID(), 'full' )? get_the_post_thumbnail_url( get_the_ID(), 'full' ):ZTGROUP_TESTIMONIAL_SLIDER_URL.'/public/1200x1600.svg';
?>
<div class="swiper-slide testimonial-slide">
    <div class="testimonial">
        <div class=" testimonial-img">
            <img src="<?php echo $feature_image; ?>" alt="">
        </div>
        <div class=" testimonial-text">
            <div class="tesimonial-content">
               
                    <?php echo get_the_content(); ?>
               
            </div>
            <div class=" testimonial-info">
                <div class=" testimonial-name">
                    <?php echo $name; ?>
                </div>
                <div class=" testimonial-job">
                    <?php echo $job_position; ?>
                </div>
                <div class=" testimonial-company">
                    <?php echo $company; ?>
                </div>
                <div class=" testimonial-city">
                    <?php echo $city; ?>
                </div>
            </div>
        </div>
    </div>
</div> 