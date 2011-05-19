<?php get_header(); ?>

	<?php include (TEMPLATEPATH . '/slide.php'); ?>

	<div class="clear" id="top" style="">&nbsp;</div>
	
	<div class="g320" id="welcome">
	
	<h2 class="heading">welcome to <?php bloginfo('name');?> </h2>

	<p><?php $welcome = get_option('iii_welcom'); echo ($welcome); ?> </p>
	
	<br/>
	
	<h2 class="heading"><?php $headerLeft = get_option('iii_headerLeft'); echo ($headerLeft); ?></h2>
	
	<ul>
	<li><?php $s1 = get_option('iii_swdg1'); echo ($s1); ?></li>
	<li><?php $s2 = get_option('iii_swdg2'); echo ($s2); ?></li>
	<li><?php $s3 = get_option('iii_swdg3'); echo ($s3); ?></li>
	<li><?php $s4 = get_option('iii_swdg4'); echo ($s4); ?></li>
	<li><?php $s5 = get_option('iii_swdg5'); echo ($s5); ?></li>
	<li><?php $s6 = get_option('iii_swdg6'); echo ($s6); ?></li>
	<li><?php $s7 = get_option('iii_swdg7'); echo ($s7); ?></li>
	<li><?php $s8 = get_option('iii_swdg8'); echo ($s8); ?></li>
	<li><?php $s9 = get_option('iii_swdg9'); echo ($s9); ?></li>
	<li><?php $s10 = get_option('iii_swdg10'); echo ($s10); ?></li>
	<li><?php $s11 = get_option('iii_swdg11'); echo ($s11); ?></li>
	<li><?php $s12 = get_option('iii_swdg12'); echo ($s12); ?></li>
	<li><?php $s13 = get_option('iii_swdg13'); echo ($s13); ?></li>
	<li><?php $s14 = get_option('iii_swdg14'); echo ($s14); ?></li>
	<li><?php $s15 = get_option('iii_swdg15'); echo ($s15); ?></li>
	</ul>
	
	</div><!-- end Welcome -->
	
	<div class="g320" id="blog-front">
	
	<h2 class="heading">
	<?php $headerMiddle = get_option('iii_headerMiddle'); echo ($headerMiddle); ?>
	</h2>
	
	<?php $my_query = new WP_Query('category_name=Blog&showposts=4'); 
	while ($my_query->have_posts()) : $my_query->the_post();
    $do_not_duplicate = $post->ID; ?>
	<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="meta">  - <?php the_time('F jS, Y'); ?></span></h1>
	<p><?php the_excerpt_reloaded(50, '<img>', 'content_rss', FALSE); ?></p>
	<?php endwhile; ?>
    	
	</div><!-- end Blog-Front -->
	
	
	<div class="g320" id="others">
	
	<h2 class="heading"><?php $headerRight = get_option('iii_headerRight'); echo ($headerRight); ?></h2>
	
	<ul>
	<li>
	<?php $my_query = new WP_Query('category_name=Our Amazing Team&showposts=4'); 
	while ($my_query->have_posts()) : $my_query->the_post();
    $do_not_duplicate = $post->ID;?>
	
	<!-- Change Thumbnail Height & Width Here.  Where you see &h=51, &w=51.  Change those dimensions to meet your own preferences. -->
	
	<?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?>
	<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=51&w=51&zc=1" alt="<?php the_title(); ?>" width="51" height="51" /></a><?php the_content('Read more...'); ?>
	<?php } ?>
	<?php endwhile; ?>
	
	</li>
	</ul>
	
	</div><!-- end Others -->
	
	<div class="clear" style="height:50px;">&nbsp;</div>
	
	<div class="g480">
	<p class="twitter"><?php include (TEMPLATEPATH . '/twitter.php'); ?></p>
	</div>
	
	<div class="g480">&nbsp;</div>
	
	<div class="clear" style="height:10px;">&nbsp;</div>
	
	<?php include (TEMPLATEPATH . '/bottom.php'); ?>

<?php get_footer(); ?>