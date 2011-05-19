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
<?php if (function_exists(dynamic_sidebar('primary-widget-area'))) dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<div class="shadow-bottom"></div>
</div>