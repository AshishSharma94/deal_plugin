<?php

$filters = array();
$relation = array('relation' => 'OR');
array_push($filters,$relation);

if(!empty($_GET['launch'])){
  $start = $_GET['launch']."-01-01";
  $end = $_GET['launch']."-12-31";
  $launch = array(
            'key' => 'launch_year',
            'value' => array($start, $end),
            'compare' => 'BETWEEN',
            'type' => 'DATE'
  );
  array_push($filters,$launch);
}

if(!empty($_GET['sector'])){
  $sector = array(
            'key' => 'deal_sectors',
            'value' => $_GET['sector'],
            'compare' => '='
  );
  array_push($filters,$sector);
}

if(!empty($_GET['stage'])){
  $stage = array(
            'key' => 'deal_stage',
            'value' => $_GET['stage'],
            'compare' => '='
  );
  array_push($filters,$stage);
}

if(!empty($_GET['amount'])){
  if($_GET['amount']=='first'){
    $start = "0";
    $end = "100000";
  }elseif($_GET['amount']=='second'){
    $start = "100000";
    $end = "1000000";
  }elseif ($_GET['amount']=='third') {
    $start = "1000000";
    $end = "10000000";
  }
  $amount = array(
            'key' => 'funding_amount',
            'value' => array($start,$end),
            'compare' => 'BETWEEN',
            'type'      => 'NUMERIC'
  );
  array_push($filters,$amount);
}

//print_r($filters);

$query1 = new WP_Query(array(
    'post_type' => 'deals',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_query' => $filters,
    'order' => $_GET['order']
));

 ?>


<div class="deals-container all-deals">

  <?php
    include( plugin_dir_path( __FILE__ ) . 'filters.php');
    while ($query1->have_posts()) { $query1->the_post();
        include( plugin_dir_path( __FILE__ ) . 'deal-card.php');
    }
  ?>

</div>
