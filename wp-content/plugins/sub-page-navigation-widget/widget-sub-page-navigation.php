<?php

/*

Plugin Name: Sub Page Navigation Widget
Description: You can add this widget to sidebars on pages to show all sub pages of the current one.
Plugin URI: http://dennishoppe.de/wordpress-plugins/sub-page-navigation
Version: 1.1
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de

*/

// Plugin Class
If (!Class_Exists('wp_widget_sub_page_navigation')){
Class wp_widget_sub_page_navigation Extends WP_Widget {
  var $base_url;
  var $arr_option;
  
  Function __construct(){
    // Get ready to translate
    $this->Load_TextDomain();
    
    // Setup the Widget data
    parent::__construct (
      False,
      $this->t('Sub Pages'),
      Array('description' => $this->t('You can add this widget to sidebars on pages to show all sub pages of the current one.'))
    );

    // Read base_url
    $this->base_url = get_bloginfo('wpurl').'/'.Str_Replace("\\", '/', SubStr(RealPath(DirName(__FILE__)), Strlen(ABSPATH)));
  }
  
  Function Load_TextDomain(){
    $locale = Apply_Filters( 'plugin_locale', get_locale(), __CLASS__ );
    Load_TextDomain (__CLASS__, DirName(__FILE__).'/language/' . $locale . '.mo');
  }
  
  Function t ($text, $context = ''){
    // Translates the string $text with context $context
    If ($context == '')
      return Translate ($text, __CLASS__);
    Else
      return Translate_With_GetText_Context ($text, $context, __CLASS__);
  }
  
  Function Default_Options(){
    // Default settings
    return Array(
      'title' => $this->t('Navigation'),
      'orderby' => 'menu_order',
      'order' => 'ASC'    
    );
  }
  
  Function Load_Options($options){
    $options = (ARRAY) $options;
    
    // Delete empty values
    ForEach ($options AS $key => $value)
      If (!$value) Unset($options[$key]);
    
    // Load options
    $this->arr_option = Array_Merge ($this->Default_Options(), $options);
  }
  
  Function Get_Option($key, $default = False){
    If (IsSet($this->arr_option[$key]) && $this->arr_option[$key])
      return $this->arr_option[$key];
    Else
      return $default;
  }
  
  Function Set_Option($key, $value){
    $this->arr_option[$key] = $value;
  }

  Function Widget ($widget_args, $options){
    // If this is not a page we bail out
    If (!is_page()) return False;
    
    // Load options
    $this->load_options($options); Unset ($options);
    
    // Load post and post type
    $post = $GLOBALS['post'];
    
    // Load Navigation
    $navigation = NEW WP_Query;
        
    // Read current child posts
    $navigation->Query(Array(
      'post_parent'         => $post->ID,
      'post_type'           => 'page',
      'posts_per_page'      => -1,
      'orderby'             => $this->get_option('orderby'),
      'order'               => $this->get_option('order'),
      'ignore_sticky_posts' => True,
      'post__not_in'        => $this->ExplodeInt(',', $this->get_option('exclude'))
    ));

    // Show widget data
    If ($navigation->have_posts() && $post->post_parent == 0){
      $widget_title = Apply_Filters('the_title', $post->post_title);
      $parent_id = False;
    }

    ElseIf ($navigation->have_posts() && $post->post_parent != 0){
      $widget_title = Apply_Filters('the_title', $post->post_title);
      $parent_id = $post->post_parent;
    }

    ElseIf (!$navigation->have_posts() && $post->post_parent == 0){
      If ($this->get_option('do_not_show_on_top_leves_without_subs')) return False;
      $widget_title = False;
      $navigation->Query(Array(
        'post_parent'         => 0,
        'post_type'           => 'page',
        'posts_per_page'      => -1,
        'orderby'             => $this->get_option('orderby'),
        'order'               => $this->get_option('order'),
        'ignore_sticky_posts' => True,
        'post__not_in'        => $this->ExplodeInt(',', $this->get_option('exclude'))
      ));
      $parent_id = False;
    }

    ElseIf (!$navigation->have_posts() && $post->post_parent != 0){
      $widget_title = get_the_title($post->post_parent);
      $navigation->Query(Array(
        'post_parent'         => $post->post_parent,
        'post_type'           => 'page',
        'posts_per_page'      => -1,
        'orderby'             => $this->get_option('orderby'),
        'order'               => $this->get_option('order'),
        'ignore_sticky_posts' => True,
        'post__not_in'        => $this->ExplodeInt(',', $this->get_option('exclude'))
      ));
      $parent_id = $post->post_parent;
    }
    
    // Widget title
    If ( $widget_title && $this->get_option('replace_widget_title') ) 
      $this->set_option('title', $widget_title);
    
    // Widget output    
    Echo $widget_args['before_widget'];
    
    // Load widget template
    Include DirName(__FILE__) . '/widget.php';
    
    // Reset Query
    WP_Reset_Query();
    
    // Widget bottom  
    Echo $widget_args['after_widget'];
  }
 
  Function form ($options){
    // Load options
    $this->load_options ($options); Unset ($options);
    
    Include DirName(__FILE__) . '/form.php';
  }
 
  Function update ($new_settings, $old_settings){ return $new_settings; }
  
  Function ExplodeInt($delimiter, $string){
    $arr_parts = Explode ($delimiter, $string);
    ForEach ($arr_parts AS $index => &$value) $arr_parts[$index] = IntVal(Trim($value));
    return $arr_parts;
  }

} /* End of Class */
Add_Action ('widgets_init', Create_Function ('','Register_Widget(\'wp_widget_sub_page_navigation\');') );
Require_Once DirName(__FILE__).'/contribution.php';
} /* End of If-Class-Exists-Condition */
/* End of File */