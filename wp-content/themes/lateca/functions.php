<?php

// Sidebar areas
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

// Actions
add_action('init', 'create_portfolio');
add_action("admin_init", "add_portfolio");
add_action('save_post', 'update_website_url');
add_action("manage_posts_custom_column",  "portfolio_columns_display");

function create_portfolio() {
    $portfolio_args = array(
        'label' => __('Portfolio'),
        'singular_label' => __('Portfolio'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('portfolio', $portfolio_args);
}

function add_portfolio(){
    add_meta_box("portfolio_details", "Portfolio Options", "portfolio_options", "portfolio", "normal", "low");
}

function portfolio_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $website_url = $custom["website_url"][0];
    ?>
    <div id="portfolio-options">
            <label for="website_url">Website URL:</label><br/>
            <input name="website_url" type="text" size="30" id="website_url" value="<?php echo $website_url; ?>" /> 
    </div>
    <?php
}

function update_website_url(){
    global $post;
    update_post_meta($post->ID, "website_url", $_POST["website_url"]);
}

function portfolio_columns_display($portfolio_columns){
    switch ($portfolio_columns) {
        case "description":
            the_excerpt();
            break;				
    }
}

// Filters
add_filter("manage_edit-portfolio_columns", "portfolio_edit_columns");
 
function portfolio_edit_columns($portfolio_columns){
    $portfolio_columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "title" => "Project Title",
        "description" => "Description",
    );
    return $portfolio_columns;
}



?>