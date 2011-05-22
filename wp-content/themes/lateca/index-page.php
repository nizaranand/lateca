<?php
/*
Template Name: Index template
*/
?>
<?php get_header(); ?>
<div class="grid_12 alpha" id="content">
    <div id="slider">
       <div class="backLink"><a href="#" title="Back" id="back">Back</a></div>
       <div class="forwardLink"><a href="#" title="Forward" id="forward">Forward</a></div>
       <div id="slideContainer">
           <ul id="slides"> 
               <?php 
               $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 5));
               while ( $loop->have_posts() ) : $loop->the_post();	
                    $custom = get_post_custom($post->ID);
                    $thumbnail_id = $custom["_thumbnail_id"][0];
                    $thumbnail = wp_get_attachment_image_src($thumbnail_id);
                    $image = str_replace('-150x150', '', $thumbnail[0]);
                ?>
                <li>
                    <a href="/<?php echo $post->post_name.'/'.$post->post_name; ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&w=934&h=325&zc=1" alt="" />
                    </a>
                </li>
                <?php endwhile; ?>  
           </ul> 
       </div>
       <div id="paginator"></div> 
    </div>
    <div class="clear"></div>
    <div class="content">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        In odio lectus, vehicula in fermentum eget, ullamcorper ac nisi. 
        Ut sodales magna quis lorem adipiscing at vulputate libero tincidunt. 
        Suspendisse vitae mi sit amet risus tincidunt rhoncus. 
        Pellentesque rhoncus, diam sit amet molestie semper, mauris magna sollicitudin lorem, 
        in faucibus leo elit non lectus. Aenean fringilla dignissim orci. Etiam ut enim mi. 
        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
        Nam cursus eleifend risus, id pharetra massa hendrerit id. 
        In consectetur odio et enim pellentesque fringilla. Donec non sem eu nunc posuere venenatis. 
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
        Suspendisse potenti. Etiam dignissim condimentum iaculis. Nam et risus eget augue faucibus fringilla. 
        Pellentesque ut felis arcu, non sagittis est. Donec bibendum lorem in nisl consectetur malesuada. 
        Mauris convallis euismod nisi, eu dictum ipsum lacinia ac. 
        Praesent pulvinar sodales purus quis consectetur.
        <br/><br/><br/>
    </p>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>