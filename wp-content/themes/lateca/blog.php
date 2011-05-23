<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_9 alpha" id="content">
    <div class="content posts">
    <?php 
    $loop = new WP_Query(array('posts_per_page' => 10));
    while ( $loop->have_posts() ) : $loop->the_post();	
        $custom = get_post_custom($post->ID);
        $thumbnail_id = $custom["_thumbnail_id"][0];
        $thumbnail = wp_get_attachment_image_src($thumbnail_id);
        $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
    ?>
    <div class="post">
    <div class="grid_3 alpha image">
        <a href="<?php the_permalink(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=194&h=164&zc=1" alt=""/>
        </a>
    </div>
    <div class="entry-summary">
        <h2 class="entry-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="info">Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> <span>under <?php the_category(', ') ?></span></div>
        <?php echo get_summary($post->post_content, 1); ?>
        <div class="tags"><?php the_tags( '<p>Tags: ', ', ', '</p>'); ?></div>
    </div>
    <div class="clear"></div>
    </div>
    <?php endwhile; // end of the loop. ?>
    </div>
</div>
<div class="grid_3 omega" id="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>