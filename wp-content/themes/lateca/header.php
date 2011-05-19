<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/960.css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox-1.3.4.css" media="screen" />

        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.5.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.min.js" type="text/javascript"></script>

        <?php wp_head(); ?>
        
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="/media/css/ie6.css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="/media/css/ie.css" media="screen" /><![endif]-->
        <script type="text/javascript">
        $(document).ready(function(){
        });
        </script>


    </head>
    <?php if (is_home()) { ?>
    <body class="home"> <!-- The default body class is "news" -->
    <?php } else { ?>
    <body class="other"> <!-- An alternative body class is defined, based on the page title -->
    <?php } ?>
        <div class="wrapper">
        <div class="container_12 contentwrapper">
            <div class="grid_12 alpha" id="header">
                <div class="grid_3 alpha logo">
                    <h1><a href="<?php echo get_option('home'); ?>/">
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('home'); ?>" />
                        </a></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="grid_9 omega">
                    <?php do_action('icl_language_selector'); ?>
                    <div class="navigation">
                        <?php wp_list_pages('title_li='); ?>
                    </div>
                </div>
            </div>
            <div class="grid_12 alpha" id="breadcrumbs">
            <?php
            if(function_exists('bcn_display')) bcn_display();
            ?>
            </div>