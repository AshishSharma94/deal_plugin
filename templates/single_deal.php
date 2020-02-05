<?php

$id = $atts['post-id'];  //get post id from shortcode written in backend
$query1 = new WP_Query(array(
    'p' => $id,
    'post_type' => 'deals',
    'post_status' => 'publish',
    'posts_per_page' => 1
)); ?>


<div class="deals-container single-deal">
  <?php while ($query1->have_posts()) { $query1->the_post();
        include( plugin_dir_path( __FILE__ ) . 'deal-card.php');
 } ?>

</div>
