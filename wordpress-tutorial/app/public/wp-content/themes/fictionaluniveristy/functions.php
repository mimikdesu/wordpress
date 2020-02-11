<?php
    function univeristy_files() {
        wp_enqueue_script('main-university-js', get_theme_file_uri( '/js/scripts-bundled.js' ), NULL, microtime(), true);
        wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('university_main_styles',get_stylesheet_uri());
        wp_enqueue_style('font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    }

    function university_features() {
        // using for creating own menu's
        // register_nav_menu("footer-menu-location-1", "Footer Menu Location 1");
        // register_nav_menu("footer-menu-location-2", "Footer Menu Location 2");
        // register_nav_menu("header-menu-location", "Header Menu Location");
        add_theme_support('title-tag');
    }

    add_action('wp_enqueue_scripts', 'univeristy_files');
    add_action('after_setup_theme', 'university_features');
    
?>