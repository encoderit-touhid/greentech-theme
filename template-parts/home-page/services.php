<?php
 $args = array(
  'post_status' => 'publish',
  'post_type'   => 'greentech_services',
  'limit'=>-1,     
);

$query = get_posts($args);
//var_dump($query);

?>

 <div class="owl-carousel vegetable-carousel justify-content-center">
       <?php 
       foreach($query as $service)
       {
           ?>
              <div class="service_slide_item">
            <div
              class="border border-secondary rounded position-relative fruite-item"
            >
              <div class="fruite-img">
                <img
                  src="<?=get_the_post_thumbnail_url($service->ID)?>"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>
              <div class="p-3 rounded-bottom text-start">
                <h5><?=$service->post_title?></h5>
                <p class="mb-2 small_text">
                <?=get_post_meta($service->ID, 'service_content_one', true)?>
                </p>
                <p class="mb-2 small_text">
                <?=get_post_meta($service->ID, 'service_content_two', true)?>
                </p>
              </div>
            </div>
          </div>
           <?php
       }
       ?>
         
</div>