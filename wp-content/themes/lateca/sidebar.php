<div id="sidebar-shadow">
<div class="shadow-top"></div>
<div class="shadow-center">
<div class="search">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="" />
    </form>
</div>
<ul class="widgets">
<?php if ( ! is_page() OR is_page('blog')): ?>
<li id="recent-posts-3" class="widget-container widget_my_categories">
    <h3 class="widget-title"><?php echo __('Categories'); ?></h3>
    <ul> 
        <?php
        $cat_params['title_li'] = '';
        $cat_params['child_of'] = 6;
        wp_list_categories($cat_params); 
        ?>
    </ul> 
</li>
<?php endif; ?>
<?php if (function_exists(dynamic_sidebar('primary-widget-area'))) dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<div class="shadow-bottom"></div>
</div>