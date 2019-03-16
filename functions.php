<?php 
    
    // Add Theme Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ] );
    add_theme_support( 'html5' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter-content' );
    
    // Load CSS
    function anoobi_enqueue_styles() {
        
        wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
    
        
    }
    
    add_action( 'wp_enqueue_scripts', 'anoobi_enqueue_styles' );
    
    // Register Menu Locations
    register_nav_menus( [
        'main-menu' => esc_html__('Main Menu', 'anoobi')
    ] );
    
    
    // Setup Widget Areas
    function anoobi_widgets_init() {
        
        register_sidebar([
            'name'              =>  esc_html__( 'Main Sidebar', 'anoobi' ),
            'id'                =>  'main-sidebar',
            'description'       =>  esc_html__( 'Add widgets for main sidebar here', 'anoobi' ),
            'before_widget'     =>  '<section class="widget">',
            'after_widget'      =>  '</section>',
            'before_title'      =>  '<h2 class="widget-title">',    
            'after_title'       =>  '</h2>'    
        ]);
        
        register_sidebar([
            'name'              =>  esc_html__( 'Footer Sidebar', 'anoobi' ),
            'id'                =>  'footer-sidebar',
            'description'       =>  esc_html__( 'Add widgets for footer sidebar here', 'anoobi' ),
            'before_widget'     =>  '<section class="widget">',
            'after_widget'      =>  '</section>',
            'before_title'      =>  '<h2 class="widget-title">',    
            'after_title'       =>  '</h2>'    
        ]);
        
        register_sidebar([
            'name'              =>  esc_html__( 'Page Sidebar', 'anoobi' ),
            'id'                =>  'page-sidebar',
            'description'       =>  esc_html__( 'Add widgets for page sidebar here', 'anoobi' ),
            'before_widget'     =>  '<section class="widget">',
            'after_widget'      =>  '</section>',
            'before_title'      =>  '<h2 class="widget-title">',    
            'after_title'       =>  '</h2>'    
        ]);
        
        register_sidebar([
            'name'              =>  esc_html__( 'Front Page Sidebar', 'anoobi' ),
            'id'                =>  'front-page-sidebar',
            'description'       =>  esc_html__( 'Add widgets for front page sidebar here', 'anoobi' ),
            'before_widget'     =>  '<section class="widget">',
            'after_widget'      =>  '</section>',
            'before_title'      =>  '<h2 class="widget-title">',    
            'after_title'       =>  '</h2>'    
        ]);
        
    }
    
    add_action( 'widgets_init', 'anoobi_widgets_init' );
    
    
    
    
?>