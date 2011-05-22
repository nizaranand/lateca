<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_9 alpha" id="content">
    <div class="content">
    <?php $loop = new WP_Query(array('posts_per_page' => 10)); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php	
    $custom = get_post_custom($post->ID);
    $screenshot_url = $custom["screenshot_url"][0];
    ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php endwhile; // end of the loop. ?>
    </div>
</div>
<div class="grid_3 omega" id="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>