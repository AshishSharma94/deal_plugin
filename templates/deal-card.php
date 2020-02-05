<?php
global $post;
$founders = get_post_meta($post->ID, 'founders', true); //get meta values
$investors = get_post_meta($post->ID, 'investors', true);
$article_link = get_post_meta($post->ID, 'article_link', true);
?>

<div class="deal-card">
  <div class="company-base-info">
    <div class="company-logo">
      <!-- Image src  -->
      <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" />
    </div>
    <div class="company-profile">
        <div class="company-name">
          <!-- company name -->
          <span><?php echo get_post_meta($post->ID,'deals_name',true);  ?></span>
        </div>
        <div class="company-sector">
          <!-- company sector -->
          <span><?php echo get_post_meta($post->ID,'deal_sectors',true);  ?></span>
        </div>
    </div>

  </div>
  <div class="other-info">
    <div class="launch-year">
      <!-- launch year -->
      <span><?php echo get_post_meta($post->ID,'launch_year',true);  ?></span>
    </div>
    <div class="founders">
      <!-- founders -->
      <span>
        <?php
          $founder = explode(",",$founders);
          $count = count($founder) -1; if($count<=0){$final_count = "";}else{$final_count = " + ".$count;}
          echo "<strong>Founders: </strong>".$founder[0].$final_count;
        ?>
      </span>
    </div>
    <div class="investors">
      <!-- investors -->
      <?php
        $investor = explode(",",$investors);
        $count = count($investor) -2; if($count<=0){$final_count = "";}else{$final_count = " + ".$count;}
        echo "<strong>Investors: </strong>".$investor[0].", ".$investor[1].$final_count;
      ?>
    </div>
    <div class="article-button">
      <!-- article-button -->
      <input type="button" id="read-more" value="Read More" onclick="window.open('<?php echo get_post_meta($post->ID,'article_link',true); ?>','targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=SomeSize,height=SomeSize'); return false;" />
    </div>
  </div>
</div>
