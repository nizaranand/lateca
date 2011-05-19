<?php get_header(); ?>

<div class="g600" id="blog">

	<?php if (have_posts()) : ?>

		<h2 class="heading">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_time('l, F jS, Y') ?></p>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2>No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>
	
	</div>

<div class="g320" id="blog">
<?php get_sidebar(); ?>
</div><!-- end g320 -->
<?php get_footer(); ?>