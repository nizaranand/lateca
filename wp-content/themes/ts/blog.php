<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="g600" id="blog">

<?php $feature_post = get_posts( 'category=5&numberposts=10' ); ?>
			
<?php foreach( $feature_post as $post ) : setup_postdata( $post ); ?>
		
<h2 class="heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><span class="meta"><?php the_time('F jS, Y') ?> By <?php the_author(); ?></span>
<?php // This will show only the image. Alter the width and height (in both places) to your needs. ?>
<?php if ( get_post_meta($post->ID, 'preview', true) ) { ?>
<div class="postthumb"> 
<img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, "preview", $single = true); ?>&h=250&w=500&zc=1" alt="<?php the_title(); ?>" width="500" height="250" />
</div>
<?php } ?>

<?php if ( get_post_meta($post->ID, 'portfolio', true) ) { ?>
<div class="postthumb"> 
<img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, "portfolio", $single = true); ?>&h=250&w=500&zc=1" alt="<?php the_title(); ?>" width="500" height="250" />
</div>
<?php } ?>


<p>
<?php if(function_exists(the_excerpt_reloaded)) {

the_excerpt_reloaded(100, '', 'none', TRUE, 'Continue reading &rarr;', FALSE);

} else {

the_excerpt(''.__('Read More').'');

} ?>
</p>
<?php endforeach; ?>
			
</div><!-- end g600 blog -->
		
<div class="g320" id="blog">
<?php get_sidebar(); ?>
</div><!-- end g320 -->


<?php get_footer(); ?>