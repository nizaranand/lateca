<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="g600" id="blog">

<h2><?php $numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
if (0 < $numposts) $numposts = number_format($numposts); ?>
<h2 class="heading" style="padding-top:0"><?php echo $numposts.' recipes published since October 06, 2008'; ?>
	</h2>

	<ul id="archive-list" style="margin-top:20px;">
		<?php
		$myposts = get_posts('numberposts=-1&');
		foreach($myposts as $post) : ?>
			<li><?php the_time('m/d/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
	</ul>
	
</div>

<div class="g320" id="blog">
<?php get_sidebar(); ?>
</div><!-- end g320 -->


<?php get_footer(); ?>
