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