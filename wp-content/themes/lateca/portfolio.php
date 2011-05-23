<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
<div class="grid_12 alpha" id="breadcrumbs">
<?php if(function_exists('bcn_display')) bcn_display(); ?>
</div>
<div class="grid_12 alpha" id="content">
    <h1 class="entry-title">Portfolio</h1>
    <div class="portfolio">
    <?php 
    $c = 0;
    $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 9));
    while ( $loop->have_posts() ) : $loop->the_post();	
        $custom = get_post_custom($post->ID);
        $thumbnail_id = $custom["_thumbnail_id"][0];
        $thumbnail = wp_get_attachment_image_src($thumbnail_id);
        $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
        $c++;
        $class = '';
        $clear = '';
        if (in_array($c, array(1,4,7,10,13))) {
            $class = 'alpha';
        }
        if (in_array($c, array(3,6,9,12,16))) {
            $class = 'omega';
            $clear = '<div class="clear"></div><div class="portfolio-line"></div>';
        }
    ?>
    <div class="grid_4 <?php echo $class; ?>">
        <div class="image">
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=294&h=210&zc=1" alt="" /></a>
        </div>    
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="content">
            <?php echo get_summary($post->post_content); ?>
        </div>
    </div>
    <?php echo $clear; ?>
    <?php endwhile; ?>  
    <?php 
    if ( ! in_array($c, array(3,6,9,12,16))) {
        echo '<div class="clear"></div><div class="portfolio-line noline"></div>';
    }
    ?>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>