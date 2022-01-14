<?php

get_header(); ?>

<!-- example react component -->
<div id="navigation"></div>
<!-- end example react component -->

<?php if (have_posts()) {
  while(have_posts()) {
    the_post(); ?>
      <?php the_content(); ?>
  <?php }
} ?>


<?php
get_footer();