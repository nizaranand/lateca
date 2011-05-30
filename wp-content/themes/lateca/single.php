<?php
/*
Template Name Posts: Single
*/
?>
<?php get_header(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".page-item-13").addClass("current_page_item");
});
</script>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_9 alpha" id="content">
    <div class="content posts">
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); 
        $custom = get_post_custom($post->ID);
        $thumbnail_id = $custom["_thumbnail_id"][0];
        $thumbnail = wp_get_attachment_image_src($thumbnail_id);
        $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
    ?>
    <div class="post">
    <div class="grid_3 alpha image">
        <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=194&h=164&zc=1" alt=""/>
    </div>
    <div class="entry-summary">
    <h2 class="entry-link"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <div class="tags">
        <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    </div>
    <div class="comments">
    <?php if ( comments_open() && pings_open() ) { // Both Comments and Pings are open ?>
    You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
    <?php } elseif ( !comments_open() && pings_open() ) { // Only Pings are Open ?>
    Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
    <?php } elseif ( comments_open() && !pings_open() ) { // Comments are open, Pings are not ?>
    You can skip to the end and leave a response. Pinging is currently not allowed.
    <?php } elseif ( !comments_open() && !pings_open() ) { // Neither Comments, nor Pings are open ?>
    Both comments and pings are currently closed.
    <?php } edit_post_link('Edit this entry','','.'); ?>
    </div>
    </div>
    </div>
    <div class="clear"></div>
    <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </div>
</div>
<div class="grid_3 omega" id="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>