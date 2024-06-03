<?php
 $args = array(
  'post_status' => 'publish',
  'post_type'   => 'greentech_case_study',
  'posts_per_page'=>5,     
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
  <!-- Case Studies Start-->
    <div class="container-fluid fruite py-5">
      <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px">
          <h2 class="display-4">Case Studies</h2>
          <p>Case Studies: Innovative Applications of Smart Technologies</p>
        </div>
        <div class="row g-4 justify-content-center">
         <?php
          foreach($query as $value)
          {
            ?>
             <div class="col-md-6 col-lg-4 col-xl-4">
            <a class="_single_item" href="<?php echo get_the_permalink($value->ID)?>">
              <div
                class="rounded position-relative fruite-item border border-secondary bg-light"
              >
                <div class="fruite-img">
                  <img
                    src="<?=get_the_post_thumbnail_url($value->ID)?>"
                    class="img-fluid w-100 rounded-top"
                    alt=""
                  />
                </div>
                <div
                  class="text-white bg-primary px-3 py-1 rounded position-absolute"
                  style="top: 10px; left: 10px"
                >
                  <?=get_post_meta($value->ID, 'image_headings', true)?>
                </div>
                <div class="p-3 rounded-bottom text-dark">
                  <h5>
                    <?=$value->post_title?>
                  </h5>
                  <span class="small_text">
                    <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                    
                    <?=get_post_meta($value->ID, 'country', true)?>
                  </span>
                  <p class="mt-2 mb-0 small_text">
                   <?=$value->post_content?>
                  </p>
                </div>
              </div>
            </a>
          </div>
            <?php
          }
         ?>
          
        </div>
      </div>
    </div>
    <!-- Case Studies End-->