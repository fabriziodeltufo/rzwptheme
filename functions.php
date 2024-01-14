<?php
/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'rzwptheme_setup' ) ) {

    function rzwptheme_setup() {

        // Enable custom header
        add_theme_support( 'custom-header' );

        // Enable title in header
        add_theme_support( 'title-tag' );

        // Enable featured image
        add_theme_support( 'post-thumbnails' );

        // Image size
        add_image_size( 'image-small', 350, 270, true );
        add_image_size( 'image-big', 1400, 900, true );

        // Page excerpt
        add_post_type_support( 'page', 'excerpt' );

        // Custom menu areas
        register_nav_menus( array(
            'header' => esc_html__( 'Header', 'rzwptheme' )
        ) );

    }

}
add_action( 'after_setup_theme', 'rzwptheme_setup' );






/*  Enqueue css
/* ------------------------------------ */
if ( ! function_exists( 'rzwptheme_styles' ) ) {
    function rzwptheme_styles() {

        wp_enqueue_style( 'cdnjs-cloudflare-style', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' );

        wp_enqueue_style( 'rzwptheme-style', get_template_directory_uri() . '/style.css' );

    }
}
add_action( 'wp_enqueue_scripts', 'rzwptheme_styles' );





/*  Enqueue javascript
/* ------------------------------------ */

function rzwptheme_scripts() {

    wp_enqueue_script( 'rzwptheme-bundle', get_template_directory_uri() . '/js/bundle.min.js','','', true );
  
    wp_enqueue_script( 'rzwptheme-scripts', get_template_directory_uri() . '/js/scripts.js','','', true );
    
  }
  add_action( 'wp_enqueue_scripts', 'rzwptheme_scripts' );


?>