<?php

If (!$this->get_option('hide_widget_title'))
  Echo $widget_args['before_title'] . $this->get_option('title') . $widget_args['after_title'];

?>

<ul>

  <?php If ( $parent_id && !$this->get_option('hide_parent_link') ) : ?>
  <li class="parent-post">
    <a href="<?php Echo get_permalink($parent_id) ?>" title="<?php Echo get_the_title($parent_id) ?>"><?php Echo get_the_title($parent_id) ?></a>
  </li>
  <?php EndIf; ?>

  <?php While($navigation->have_posts()) : $navigation->the_post(); ?>
    <li class="<?php If ($post->ID == $GLOBALS['post']->ID) Echo 'current-post' ?>">
      <a href="<?php the_permalink() ?>"
         title="<?php the_title() ?>">
         <?php the_title() ?>
      </a>
    </li>  
  <?php EndWhile; ?>

</ul>