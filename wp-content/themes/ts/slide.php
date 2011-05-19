<script type="text/javascript">
var $jx = jQuery.noConflict(); 
$jx(function() {
 $jx(".mygallery").jCarouselLite({
 btnNext: ".next",
        btnPrev: ".prev",
		easing: "backout",
	    speed: 1000
    });
 $jx(".mytext").jCarouselLite({
         btnNext: ".next",
        btnPrev: ".prev",
		visible: 1,
		vertical: true,
		easing: "backout",
	    speed: 1000
	
    });	
});
</script>

<div id="slidearea" class="tagline fade-in fade-in-med">

<div id="gallerycover" class="tagline fade-in fade-in-med">

<div class="mygallery">

        <ul>
			<?php 
	$gldcat = get_option('iii_gldcat'); 
	$gldct = get_option('iii_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
            <li>
             <div class="imageSub" style="">
			
			<?php if ($preview = get_post_meta($post->ID, 'preview', $single = true)) { ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $preview; ?>&amp;h=245&amp;w=440&amp;zc=1" alt=""/> 
				<?php } else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/1.png"  />
				
			<?php } ?> 
			
			<div class="blackbg">&nbsp;</div>
        	<div class="label"><?php the_time('l, F jS, Y') ?></div>
      		</div>

			
			</li>
			<?php endwhile; ?>
        </ul>
	
</div>
</div>

   <a href="#" class="prev"><img src="<?php bloginfo('template_directory'); ?>/style/css/i/left.gif" alt="Previous" /></a>
   <a href="#" class="next"><img src="<?php bloginfo('template_directory'); ?>/style/css/i/right.gif" alt="Next" /></a>
   
<div id="textcover">
<div class="mytext">

<ul>
	<?php 
	$gldcat = get_option('iii_gldcat'); 
	$gldct = get_option('iii_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
        <li>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php if(function_exists('the_content_limit')) { ?>
		<?php the_content_limit(300);  ?>
		<?php } else { ?>
		<p> Activate the limitpost plugin to see the post contents ! </p>
		<?php } ?> 
                    
		</li>
		<?php endwhile; ?>
        </ul>  
</div>
</div>


</div><!-- end slide area -->