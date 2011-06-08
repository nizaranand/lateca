<?php
/*
Template Name: Index template
*/
?>
<?php get_header(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#slides').cycle({fx:'fade',speed:1500,timeout:4000,prev:'#back',next:'#forward',pause:1,pager:'#paginator'});
});
</script>
<div class="grid_12 alpha" id="content">
    <div id="slider">
       <div class="backLink"><a href="#" title="Back" id="back">Back</a></div>
       <div class="forwardLink"><a href="#" title="Forward" id="forward">Forward</a></div>
       <div id="slideContainer">
           <ul id="slides"> 
               <?php 
               //$loop = new WP_Query(array('meta_key' => 'showinslider', 'meta_value' => 1));
               query_posts('post_type=portfolio&meta_key=showinslider&meta_value=1');
               while (have_posts()) : the_post();
                    
                    $o_ID = icl_object_id($post->ID, 'portfolio', false, 'en');
                    $custom = get_post_custom($o_ID);
                
                    //$custom = get_post_custom($post->ID);
                    $thumbnail_id = $custom["_thumbnail_id"][0];
                    $thumbnail = wp_get_attachment_image_src($thumbnail_id);
                    $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
                ?>
                <li>
                    <a href="/<?php echo $post->post_name.'/'.$post->post_name; ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=940&h=330&zc=1" alt="" />
                    </a>
                </li>
                <?php endwhile; ?>  
           </ul> 
       </div>
       <div id="paginator"></div> 
    </div>
    <div class="clear"></div>
    <div class="services">
    <h1><?php echo __('What services can we offer?'); ?></h1>
    <?php
    switch (ICL_LANGUAGE_CODE) {
        case 'ru': $serviceid = 173; break;
        case 'lv': $serviceid = 179; break;
        default: $serviceid = 9; break;
    }
    $args = array(
        'post_parent' => $serviceid,
        'numberposts' => 3,
        'post_type' => 'page',
    );
    $pages = get_children($args);
    $posts = array_reverse($pages);
    $c = 0;
    foreach ($posts AS $page):
        $post = get_post($page->ID);
        $custom = get_post_custom($post->ID);
        $thumbnail_id = $custom["_thumbnail_id"][0];
        $thumbnail = wp_get_attachment_image_src($thumbnail_id);
        $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
        $c++;
        $class = '';
        if ($c == 1) {
            $class = 'alpha';
        }
        if ($c == count($pages)) {
            $class = 'omega';
        }
    ?>
    <div class="grid_4 <?php echo $class; ?>">
        <div class="image">
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=294&h=121&zc=1" alt="" /></a>
        </div>    
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div>
            <?php echo get_summary($post->post_content); ?>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="clear"></div>
    </div>
    <div class="grid_6 alpha index-posts">
        <h1><?php echo __('Latest posts'); ?></h1>
        <?php 
        $c = 0;
        $loop = new WP_Query(array('posts_per_page' => 2));
        while ( $loop->have_posts() ) : $loop->the_post();	
            $custom = get_post_custom($post->ID);
            $thumbnail_id = $custom["_thumbnail_id"][0];
            $thumbnail = wp_get_attachment_image_src($thumbnail_id);
            $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
            $c++;
            $class = '';
            if ($c == 1) {
                $class = 'line';
            }
        ?>
        <div class="post <?php echo $class; ?>">
        <div class="grid_2 alpha image">
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=134&h=72&zc=1" alt="" /></a>
            <span class="date"><?php the_time('l, F jS, Y'); ?></span>
        </div>
        <div class="grid_4 omega">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="content"><?php echo get_summary($post->post_content); ?></div>
        </div>
        <div class="clear"></div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="grid_6 omega index-works">
        <h1><?php echo __('Latest works'); ?></h1>
        <?php $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 6)); ?>
        <div class="grid_4 alpha big-thumb">
        <?php
        $c = 0;
        if ($loop->have_posts() ) : $loop->the_post();
            
            $o_ID = icl_object_id($post->ID, 'portfolio', false, 'en');
            $custom = get_post_custom($o_ID);
            
            //$custom = get_post_custom($post->ID);
            $thumbnail_id = $custom["_thumbnail_id"][0];
            $thumbnail = wp_get_attachment_image_src($thumbnail_id);
            $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
        ?>
        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=294&h=210&zc=1" alt="" /></a>
        <?php endif; ?>
        </div>
        <div class="grid_2 omega thumbs">
        <?php
        $c = 0;
        while ( $loop->have_posts() ) : $loop->the_post();
            
            $o_ID = icl_object_id($post->ID, 'portfolio', false, 'en');
            $custom = get_post_custom($o_ID);
        
            //$custom = get_post_custom($post->ID);
            $thumbnail_id = $custom["_thumbnail_id"][0];
            $thumbnail = wp_get_attachment_image_src($thumbnail_id);
            $image = preg_replace('/\-([0-9]+)x([0-9]+)/', '', $thumbnail[0]);
            $class = 'omega';
            $c++;
            if ($c % 2) {
                $class = 'alpha';
            }
        ?>
        <div class="grid_1 image <?php echo $class; ?>">
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=54&h=54&zc=1" alt="" /></a>
        </div>
        <?php endwhile; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear" style="height:30px;"></div>
<?php get_footer(); ?>