<?php get_header(); ?>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_9 alpha" id="content">
    <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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