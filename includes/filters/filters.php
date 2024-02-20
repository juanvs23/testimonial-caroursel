<?php

 ///excerpt with control

/**
 * Returns a custom excerpt of the testimonial.
 *
 * @param int $limit The maximum number of words in the custom excerpt.
 * @return string The custom excerpt of the testimonial.
 */
function ztgroup_testimonial_custom_excerpts($limit) {
return wp_trim_words(get_the_excerpt(), $limit, '...');
};


/**
 * ztgroup_template_part function
 *
 * @param datatype $slug description
 * @param datatype $name description
 * @throws Some_Exception_Class description of exception
 * @return void call a function 
 */
function ztgroup_template_part($slug,$name=null){
    do_action("ztgroup_template_part{$slug}", $slug, $name);

    $templates = array();
    if (isset($name))
        $templates[] = "{$slug}-{$name}.php";

    $templates[] = "{$slug}.php";

    ztgroup_get_template_path($templates, true, false);
}


/**
 * Get the template path for the given template names.
 *
 * @param array $template_names The array of template names.
 * @param bool $load Whether to load the template or not.
 * @param bool $require_once Whether to require the template once or not.
 * @return string The located template path.
 */
function ztgroup_get_template_path($template_names, $load = false, $require_once = true){
    $located = ''; 
    foreach ((array) $template_names as $template_name) {
        if ( !$template_name ) 
        continue; 
        if (file_exists(get_stylesheet_directory().'/ztgroup-testimonial-slider/' .  $template_name)) {
            $located = get_stylesheet_directory() . '/ztgroup-testimonial-slider/' . $template_name;
            break;
        }
        if (file_exists(ZTGROUP_TESTIMONIAL_SLIDER_PATH . '/template/' . $template_name)) {
            $located = ZTGROUP_TESTIMONIAL_SLIDER_PATH . '/template/' . $template_name;
            break;
        }
    }
    if ( $load && '' != $located )
        load_template( $located, $require_once );

    return $located;
}
function ztgroup_get_stars($rating = 1, $max = 5 ){
    $stars = '';
    for ($i = 0; $i < $max; $i++) {
        if($i < $rating){
            $stars .= '<svg xmlns="http://www.w3.org/2000/svg" class="full-star"  width="24" height="24" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>';
        }else{
            $stars .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
        }
    }
    return $stars;
    
}