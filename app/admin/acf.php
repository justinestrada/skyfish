<?php
/**
 * ACF Local JSON
 */
add_filter('acf/settings/save_json', function ( $path ) {
  // update path
  $path = get_stylesheet_directory() . '/acf-json';
  // return
  return $path;   
});

/**
 * ACF Local JSON - Load Point
 */
add_filter('acf/settings/load_json', function ( $paths ) {
  // remove original path (optional)
  unset($paths[0]);
  // append path
  $paths[] = get_stylesheet_directory() . '/acf-json';
  // return
  return $paths;
});

/**
 * ACF Options Page
 */
if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page( array(
    'page_title' 	=> 'Theme Settings',
    'menu_title'	=> 'Theme Settings',
    'menu_slug' 	=> 'theme-settings',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));
}

function acf_load_qa_category_field_choices( $field ) {
  $categories = get_field('faq_categories_container');
  if ($categories && isset($categories['faq_categories'])) {
    foreach( $categories['faq_categories'] as $choice ) {
      $field['choices'][str_replace('_', ' ', trim($choice['category']))] = $choice['category'];  
    }
  }
  // return the field
  return $field;
}
add_filter('acf/load_field/name=qa_category', 'acf_load_qa_category_field_choices');