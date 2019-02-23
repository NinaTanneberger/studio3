<?php
/*
 * Minimal Dark functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Minimal Dark
*/

// Loads parent theme stylesheet
function minimal_dark_setup() {
            // Set up the WordPress core custom header feature.
            add_theme_support('custom-header', apply_filters('minimal_dark_custom_header_args', array(
                'width' => 1600,
                'height' => 720,
                'flex-height' => true,
                'header-text' => false,
            	'default-image'      => get_stylesheet_directory_uri() . '/images/header-banner.jpg',
            )));
}
add_action('after_setup_theme', 'minimal_dark_setup');
// Do not delete this
function minimal_dark_scripts()
{
    wp_enqueue_style('minimal-grid', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/custom.css');

}

add_action('wp_enqueue_scripts', 'minimal_dark_scripts', 20);

// added style
require_once( get_stylesheet_directory(). '/inc/inline-style.php' );

/**
 * Get default customizer values.
 *
 * @since 1.0.0
 *
 * @return array Default customizer values.
 */
function minimal_grid_get_default_customizer_values() {

	$defaults = array();

    $defaults['enable_header_overlay'] = false;
    $defaults['email_address_sidebar'] = __( 'someone@example.com' , 'minimal-grid');

    $defaults['enable_footer_recommend_cat'] = false;
    $defaults['footer_recommend_cat_title'] = __( 'You May Have Missed' , 'minimal-grid');
    $defaults['full_width_grid_cat'] = 1;
    $defaults['no_of_full_width_cat_posts'] = 4;
    $defaults['enable_full_grid_meta_info'] = true;
    $defaults['full_width_grid_cat_bg_color'] = '#f9e3d2';
    $defaults['full_width_grid_cat_text_color'] = '#333';

    // Front Page Layout
    $defaults['home_page_layout'] = 'no-sidebar';

    /* Preloader */
    $defaults['enable_preloader'] = true;

    /* Font and Colors */
    $defaults['primary_color'] = '#33363b';
    $defaults['secondary_color'] = '#ff2222';
    $defaults['primary_font'] = 'Open+Sans:400,400italic,600,700';
    $defaults['secondary_font'] = 'Roboto+Condensed:400,300,400italic,700';
    $defaults['site_title_text_size'] = 6.6875;
    $defaults['p_text_size'] = 16;
    $defaults['h1_text_size'] = 34;
    $defaults['h2_text_size'] = 28;
    $defaults['h3_text_size'] = 24;
    $defaults['h4_text_size'] = 18;
    $defaults['h5_text_size'] = 14;

    // Global Layout
    $defaults['enable_masonry_post_archive'] = true;
    $defaults['masonry_animation'] = 'default';
    $defaults['relayout_masonry'] = true;
    $defaults['site_layout'] = 'fullwidth';
    $defaults['global_layout'] = 'right-sidebar';
    $defaults['archive_image'] = 'full';
    $defaults['single_post_image'] = 'full';
    $defaults['single_page_image'] = 'full';

    //Pagination
    $defaults['pagination_type'] = 'infinite_scroll_load';

    //BreadCrumbs
    $defaults['breadcrumb_type'] = 'simple';

    //Single Posts Section
    $defaults['show_related_posts'] = true;
    $defaults['related_posts_title'] = __( 'Related Articles' , 'minimal-grid');

    //Archive Section
    $defaults['show_desc_archive_pages'] = true;
    $defaults['show_meta_archive_pages'] = true;

    //Excerpt
    $defaults['excerpt_length'] = 20;
    $defaults['excerpt_text_size'] = 14;

    // Footer.
    $defaults['copyright_text'] = esc_html__( 'Copyright &copy; All rights reserved.', 'minimal-grid' );
    $defaults['enable_footer_credit'] = true;
    $defaults['footer_bg_color'] = '#060606';
    $defaults['footer_text_color'] = '#fff';

	$defaults = apply_filters( 'minimal_grid_default_customizer_values', $defaults );
	return $defaults;
}