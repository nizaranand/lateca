<?php

if ( function_exists('register_sidebar') ) {
    // Area 1, located at the top of the sidebar.
    register_sidebar(array(
        'name' => __('Primary Widget Area', 'lateca'),
        'id' => 'primary-widget-area',
        'description' => __('The primary widget area', 'lateca'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
    register_sidebar(array(
        'name' => __('Secondary Widget Area', 'lateca'),
        'id' => 'secondary-widget-area',
        'description' => __('The secondary widget area', 'lateca'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 3, located in the header. Empty by default.
    register_sidebar(array(
        'name' => __('Header Widget Area', 'lateca'),
        'id' => 'header-widget-area',
        'description' => __('The header widget area', 'lateca'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 4, located in the center. Empty by default.
    register_sidebar(array(
        'name' => __('Center Widget Area', 'lateca'),
        'id' => 'center-widget-area',
        'description' => __('The center widget area', 'lateca'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 5, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'lateca'),
        'id' => 'footer-widget-area',
        'description' => __('The footer widget area', 'lateca'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}


?>