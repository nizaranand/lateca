<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>    
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.1.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fade.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jcarousel.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/css/glide.css" media="screen" />
        
        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/css/ie.css" />
        <![endif]-->
        
        <?php wp_head(); ?>
        
        <script type="text/javascript"> 
         var $sf = jQuery.noConflict();
        $sf(document).ready(function() { 
        $sf('ul.sf-menu').superfish(); 
            }); 
 
    </script>
    </head>
    
    <?php if (is_home()) { ?>
    <body class="home"> <!-- The default body class is "news" -->
    <?php } else { ?>
    <body class="other"> <!-- An alternative body class is defined, based on the page title -->
    <?php } ?>
    
    <div class="wrapper">
        <div class="main">
            <div class="g480" id="header">
                <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </div><!-- end header -->    
            <div class="g480" id="nav">
                <ul class="sf-menu">
                <?php wp_list_pages('title_li='); ?>
                </ul>
            </div><!-- end navigation -->
            <div class="clear" style="height:20px;">&nbsp;</div>    