<?php get_header(); ?>
<div class="clear"></div>
<div class="grid_12" id="content-column">
    
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2 class="heading"><?php the_title(); ?></h2>
<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
<?php endwhile; endif; ?>
    
</div>
<div class="grid_4">
<?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>