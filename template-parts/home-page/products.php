<?php
 $args = array(
  'post_status' => 'publish',
  'post_type'   => 'greentech_products',
  'limit'=>4,     
  'meta_query' => array(
      array(
          'key' => 'show_in_home',
          'value' =>'show',
          'compare' => 'like'
      )
  )
);

$query = get_posts($args);
//var_dump($query);

?>
 <div class="row g-4 justify-content-center">
          <?php 
          foreach($query as $products)
          {
            ?>
             <div class="col-md-6 col-lg-4 col-xl-3">
            <div
              class="border border-secondary rounded position-relative fruite-item"
            >
              <div class="fruite-img">
                <img
                  src="<?=get_the_post_thumbnail_url($products->ID)?>"
                  class="img-fluid w-100 rounded-top"
                  alt=""
                />
              </div>
              <div class="p-3 rounded-bottom text-start">
                <div class="products_content_part">
                  <div>
                    <h5><?=$products->post_title;?></h5>
                    <p class="mb-2 small_text">
                    <?=get_post_meta($products->ID, 'product_content_one', true)?>
                    </p>
                    <p class="mb-2 small_text">
                    <?=get_post_meta($products->ID, 'product_content_two', true)?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <?php
          }
          ?>
         
</div>