<?php get_header(); ?>

<div class="g600" id="blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="heading"><?php the_title(); ?></h2>
			<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
</div>

<div class="g320" id="blog">
<?php get_sidebar(); ?>
</div><!-- end g320 -->


<?php get_footer(); ?>