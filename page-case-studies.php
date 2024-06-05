<?php
/* Template Name: Case Studies */

get_header();
?>
<?php
 $args = array(
  'post_status' => 'publish',
  'post_type'   => 'greentech_case_study',
  'posts_per_page' => -1,     
);

$query = get_posts($args);



?>  
<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
      <h1 class="text-center text-white display-6">Case Studies</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="<?=site_url()?>">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
        <li class="breadcrumb-item active text-white">Case Studies</li>
      </ol>
    </div>
    <!-- Single Page Header End -->
  <!-- Case Studies Start-->
    <div class="container-fluid fruite py-5">
      <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px">
          <h2 class="display-4">Case Studies</h2>
          <p>Case Studies: Innovative Applications of Smart Technologies</p>
        </div>
        <div class="row g-4 justify-content-center" id="case_study_div_page">
         <?php
         //var_dump($query);
          foreach($query as $key=>$value)
          {
            if($key>5)
            break;

            ?>
             <div class="col-md-6 col-lg-4 col-xl-4">
            <a class="_single_item" href="<?=get_the_permalink($value->ID)?>">
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
        <?php
      if(sizeof($query)>6)
      {
        ?>
        <div class="text-center mt-4">
          <a href="" class="btn px-4 py-2 text-white rounded bg-primary" id="case_study_load_more">Load more</a>
          </a>
        </div>
        <?php
      }
      ?>
      </div>
      
</div>
    <!-- Case Studies End-->

     <!-- Tastimonial Start -->
     <div class="container-fluid testimonial py-5">
      <div class="container py-5">
        <div class="testimonial-header text-center">
          <h4 class="text-primary">Our Testimonial</h4>
          <h2 class="display-5 mb-5 text-dark">Our Client Saying!</h2>
        </div>
        <?php get_template_part('/template-parts/home-page/testimonial'); ?>
      </div>
    </div>
    <!-- Tastimonial End -->

<?php
get_footer();