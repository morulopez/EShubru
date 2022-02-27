<?php

    // funcion del padre 
    function my_theme_enqueue_styles() {

        $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css?id='.rand() );
        wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css?id='.rand(),
        array( $parent_style ),
        wp_get_theme()->get('Version')
        );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    function myJs() {
        wp_enqueue_script( 'myScript', get_site_url() . '/wp-content/themes/hb_child/js/mis_funciones_js.js');
    
    }
    add_action( 'wp_enqueue_scripts', 'myJs' );
    function add_favicon() {
        echo '<link rel="shortcut icon" type="image/png" href="https://hubrutechnologies.com/wp-content/uploads/2022/02/logo_white_background-scaled-e1645640684895.jpg" />';
      }
       
    add_action('wp_head', 'add_favicon');
    	
    define( 'WPCF7_VALIDATE_CONFIGURATION', false );

    
?>