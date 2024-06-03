<?php
 $args = array(
  'post_status' => 'publish',
  'post_type'   => 'greentech_reviews',
  'limit'=>-1,     
);

$query = get_posts($args);
//var_dump($query);

?>
<div class="pt-5 owl-carousel testimonial-carousel">
         <?php 
         foreach($query as $reviews)
         {
          ?>
           <div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
              <i
                class="fa fa-quote-right fa-2x text-secondary position-absolute"
                style="bottom: 30px; right: 0"
              ></i>
              <div class="mb-4 pb-4 border-bottom border-secondary">
                <p class="mb-0">
                <?php echo $reviews->post_content?>
                </p>
              </div>
              <div class="d-flex align-items-center flex-nowrap">
                <div class="bg-secondary rounded">
                  <img
                    src="<?=get_the_post_thumbnail_url($reviews->ID)?>"
                    class="img-fluid rounded"
                    style="width: 100px; height: 100px"
                    alt=""
                  />
                </div>
                <div class="ms-4 d-block">
                  <h4 class="text-dark"><?php echo $reviews->post_title?></h4>
                  <p class="m-0 pb-3"><?php echo get_post_meta($reviews->ID, 'profession', true)?></p>
                  <div class="d-flex pe-5">
                    <?php 
                    $ratings=(int)get_post_meta($reviews->ID, 'ratings', true);
                    $remining=5-(int)$ratings;
                    
                    for($i=0;$i<$ratings;$i++)
                    {
                         ?> <i class="fas fa-star text-primary"></i><?php
                    }
                    for($i=0;$i<$remining;$i++)
                    {
                         ?>  <i class="fas fa-star"></i></i><?php
                    }
                    ?>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
         }
         ?>
</div>