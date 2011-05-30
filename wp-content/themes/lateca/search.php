<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_9 alpha" id="content">
<div class="content">
<?php if (have_posts()) : ?>
    <h1>Search Results</h1>
    <ul class="search-result">
    <?php while (have_posts()) : the_post(); ?>
        <li>
            <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_time('l, F jS, Y') ?></p>
            <p><?php the_tags('Tags: ', ', '); ?></p>
        </li>
    <?php endwhile; ?> 
    </ul>
<?php else : ?>
<h1>No posts found. Try a different search?</h1>
<?php endif; ?>
</div>
<div class="clear" style="height:30px;"></div>
</div>
<div class="grid_3 omega" id="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>