<?php
/*
Template Name: Page with carousel
*/
?>
<?php get_header(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jcarousel.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.client-list').jcarousel({
        auto:4,wrap:'last',initCallback: mycarousel_initCallback
    });
});
function mycarousel_initCallback(carousel) {
    $('#next').bind('click', function() {
        carousel.next();
        return false;
    });
    $('#prev').bind('click', function() {
        carousel.prev();
        return false;
    });
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
}
</script>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_9 alpha" id="content">
    <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">
        <?php the_content(); ?>
        
        <div id="clients">
            <a href="#prev" class="buttons" id="prev">&nbsp;</a>
            <ul class="client-list">
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/colorsit.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/ford.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/londa.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/renault.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/skoda.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/tenax.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/tikkurila.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/unitek.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/zepter.jpg" alt="" /></li>
            </ul>
            <a href="#next" class="buttons" id="next">&nbsp;</a>
            <div class="clear"></div>
        </div>
        
    </div>
    <?php endwhile; // end of the loop. ?>
    </div>
</div>
<div class="grid_3 omega" id="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>