<?php
get_header();
?>
 <!-- Single Page Header start -->
 <div class="container-fluid page-header py-5">
      <h1 class="text-center text-white display-6">Case Studies</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="<?php echo site_url()?>">Home</a></li>
        <li class="breadcrumb-item">
          <a href="<?php echo site_url('/case-studies')?>">Case Studies</a>
        </li>
        <li class="breadcrumb-item active text-white">
          <?php echo get_the_title()?>
        </li>
      </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Case Studies Start-->
    <div class="SingleCaseStudies container-fluid fruite py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-9 col-md-8">
            <div class="mb-4">
              <h1 class="display-4">
              <?php echo get_the_title()?>
              </h1>
            </div>
            <div class="single_main_content">
              <div class="rounded position-relative">
                <div class="fruite-img">
                  <img
                    src="<?=get_the_post_thumbnail_url(get_the_ID())?>"
                    class="img-fluid w-100 rounded"
                    alt=""
                  />
                </div>
                <div
                  class="text-white bg-primary px-3 py-1 rounded position-absolute"
                  style="top: 10px; left: 10px"
                >
                <?=get_post_meta(get_the_ID(), 'image_headings', true)?>
                </div>
                <div class="text-dark mt-2">
                  <p class="my-2">
                    <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                    <?=get_post_meta(get_the_ID(), 'country', true)?>
                  </p>
                  <p class="my-2">
                   <?php echo get_the_content()?>
                  </p>
                  <p class="text-dark mb-0">
                    <strong>Outcome:</strong> <?=get_post_meta(get_the_ID(), 'outcome', true)?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-3 mt-md-2">
            <h4>Related Case Studies</h4>
            <?php
             $args = array(
                'post_status' => 'publish',
                'post_type'   => 'greentech_case_study',
                'posts_per_page'=>2,     
                'orderby'        => 'rand',
              );
              
              $query = get_posts($args);
              foreach($query as $case_studies)
              {
                ?>
                <a class="_single_item" href="<?php echo get_the_permalink($case_studies->ID)?>">
              <div
                class="rounded position-relative fruite-item border border-secondary bg-light"
              >
                <div class="fruite-img">
                  <img
                    src="<?=get_the_post_thumbnail_url($case_studies->ID)?>"
                    class="img-fluid w-100 rounded-top"
                    alt=""
                  />
                </div>
                <div
                  class="text-white bg-primary px-3 py-1 rounded position-absolute"
                  style="top: 10px; left: 10px"
                >
                <?=get_post_meta($case_studies->ID, 'image_headings', true)?>
                </div>
                <div class="p-3 rounded-bottom text-dark">
                  <h5>
                  <?=$case_studies->post_title?>
                  </h5>
                  <span class="small_text">
                    <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                    <?=get_post_meta($case_studies->ID, 'country', true)?>
                  </span>
                  <p class="mt-2 mb-0 small_text">
                  <?=$case_studies->post_content?>
                  </p>
                </div>
              </div>
            </a>
                <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Case Studies End-->
<?php
get_footer();