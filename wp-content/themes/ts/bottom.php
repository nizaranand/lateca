
<div class="g240" id="archive">
			
<h2 class="heading-footer"><?php $headerBL = get_option('iii_headerBL'); echo ($headerBL); ?></h2>
			
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>

</div><!-- end archives -->


			
<div class="g320" id="inspiration">
			
<h2 class="heading-footer"><?php $headerBM = get_option('iii_headerBM'); echo ($headerBM); ?></h2>
			
<div class="bookmarks-gallery">

<?php wp_list_bookmarks('title_li=&categorize=0'); ?>

</div>

</div><!-- end bookmarks -->



<div class="g240" id="info">

<h2 class="heading-footer"><?php $headerBR = get_option('iii_headerBR'); echo ($headerBR); ?></h2>

<p><?php $footer = get_option('iii_footer'); echo ($footer); ?> </p>

<!-- icons by Komodo Media http://www.komodomedia.com/download/ -->

<ul>
<li><a href="http://www.facebook.com"><img src="<?php bloginfo('template_directory'); ?>/images/facebook_16.png"></a></li>
<li><a href="http://www.digg.com"><img src="<?php bloginfo('template_directory'); ?>/images/digg_16.png"></a></li>
<li><a href="http://www.delicious.com"><img src="<?php bloginfo('template_directory'); ?>/images/delicious_16.png"></a></li>
<li><a href="http://www.twitter.com"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_16.png"></a></li>	
<li><a href="http://www.stumbleupon.com"><img src="<?php bloginfo('template_directory'); ?>/images/stumbleupon_16.png"></a></li>		
<li><a href="<?php bloginfo	('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss_16.png"></li> 
</ul>
			
</div><!-- end footer text -->

