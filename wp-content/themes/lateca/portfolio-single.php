<?php
/*
Template Name Posts: Portfolio-single
*/
?>
<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function(){
    $(".page-item-11").addClass("current_page_item");
});
</script>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_12 alpha" id="content">
    <h1 class="entry-title">Portfolio</h1>
    <div class="portfolio">
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); 
        $custom = get_post_custom($post->ID);
        $thumbnail_id = $custom["_thumbnail_id"][0];
        $thumbnail = wp_get_attachment_image_src($thumbnail_id);
        $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
    ?>
    <div class="grid_8 alpha portfolio-gallery">
        <div class="preview">
            <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=614&h=414&zc=1" alt=""/>
        </div>
        <div class="thumbs">
            <?php 
            $attachments = simple_fields_get_post_value($post->ID, array(1,1), false); 
            $c = count($attachments);
            $i = 0;
            foreach ($attachments AS $attachment) {
                $image = wp_get_attachment_url($attachment);
                $i++;
                $class = '';
                if ($i == 1) {
                    $class = 'alpha';
                }
                if ($i == $c) {
                    $class = 'omega';
                }
            ?>
            <div class="grid_1 thumb <?php echo $class; ?>">
                <a href="<?php echo $image; ?>" rel="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=54&h=54&zc=1" alt=""/>
                </a>
            </div>
            <?php } ?>
            <div class="clear"></div>
        </div>
    </div>
    <div class="grid_4 omega portfolio-content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="tags">
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
        </div>
    </div>
    <div class="clear"></div>
    <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>