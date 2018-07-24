<?php

    // Excerpt Length
    function theme_excerpt_length( $length ) {
        return 50;
    }
    add_filter('excerpt_length', 'theme_excerpt_length', 999);

    // Registers an editor stylesheet for the theme.
    function theme_editor_styles() {
        add_editor_style( 'editor-style.css' );
    }
    add_action( 'admin_init', 'theme_editor_styles' );

    // Add default content width
    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }

    // Enable Theme Support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Enable Theme Support for featured images
    add_theme_support( 'post-thumbnails' );

    // Enable Theme Support for Automatic Feed Links
    add_theme_support( 'custom-header' );

    // Enable Theme Support for featured images
    add_theme_support( 'custom-background' );

    // Enable Theme Support for wp-title()
    add_theme_support('title-tag');

    // Enable Theme Support for HTML5
    add_theme_support( 'html5' );

    // Load Theme CSS
    function theme_styles() {
        
        wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

    }
    add_action( 'wp_enqueue_scripts', 'theme_styles' );

    // Load Theme JS
    function theme_js() {

        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '', true);
        wp_enqueue_script( 'app_js', get_template_directory_uri(). '/js/app.js', array('jquery'), '', true);

    }
    add_action( 'wp_enqueue_scripts', 'theme_js' );

    // Enqueue comment-reply script
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

    // Create custom menus
    function register_theme_menus() {
        register_nav_menus(
            array('header-menu' => _( 'Main Menu' )));
    }
    add_action( 'init', 'register_theme_menus');


    // Function for creating Widgets
    add_action( 'widgets_init', 'create_sidebar_widget' );
    add_action( 'widgets_init', 'create_footer_widget' );

    function create_sidebar_widget() {

        register_sidebar(array(
            'name' => _( 'Main Widget Bar' ),
            'id' => 'widget-bar',
            'description' => _('Widgets in this area will be shown on most pages, just under the hero image.'),
            'before_widget' => '<div class="col-12 widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

    }

    function create_footer_widget() {

        register_sidebar(array(
            'name' => _( 'Footer Widget' ),
            'id' => 'footer-widget',
            'description' => _( 'Widgets in this area will be shown in the footer of every page.' ),
            'before_widget' => '<div class="col-12 col-md-4 text-center">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

    }

    // Create widgets
    create_sidebar_widget("Primary Sidebar", "primary", "Displays on the side of most pages");
    create_footer_widget("Footer Widget", "footer", "Displays in the footer of every page");

?>