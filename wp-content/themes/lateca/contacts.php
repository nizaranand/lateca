<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_12 alpha" id="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="grid_7 alpha entry-content">
        <?php the_content(); ?>
    </div>
    <div class="grid_5 omega contact-form">
        <?php echo do_shortcode( '[contact-form 1 "Contact form 1"]' ); ?>
    </div>
    <?php endwhile; // end of the loop. ?>
</div>
<div class="clear" style="height:30px;"></div>
<?php get_footer(); ?>