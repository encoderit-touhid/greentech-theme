 <?php 

 $args = array(
  'post_status' => 'publish',
  'post_type'   => 'greentech_what_we_do',
  'posts_per_page'=>3,     
  'meta_query' => array(
      array(
          'key' => 'show_in_home',
          'value' =>'show',
          'compare' => 'like'
      )
  )
);

$greentech_what_we_do = get_posts($args);

 ?>
   <!-- WHAT WE DO start -->
   <div class="container-fluid service py-5">
      <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px">
          <h2 class="display-4">WHAT WE DO</h2>
          <p>
            We believe in working closely with our clients to craft tailored
            solutions that address their unique challenges and unlock growth
            opportunities. Our comprehensive approach includes:
          </p>
        </div>

        <div class="row g-4 justify-content-center">
          <?php
           foreach($greentech_what_we_do as $key=>$greentech_what_we_do_single)
           {
            ?>
            <div class="col-md-6 col-lg-4">
            <div
              class="service-item bg-primary rounded border border-secondary"
            >
              <img
                src="<?=get_the_post_thumbnail_url($greentech_what_we_do_single->ID)?>"
                class="img-fluid rounded-top w-100"
                alt=""
              />
              <div class="content_column_main px-4 rounded-bottom">
                <div class="service-content bg-light text-center p-3 rounded">
                  <h3 class="mb-2 text-primary"><?=$greentech_what_we_do_single->post_title?></h3>
                  <p class="mb-0">
                  <?=$greentech_what_we_do_single->post_content?>
                  </p>
                </div>
              </div>
            </div>
          </div>
            <?php
           }
          ?>
        </div>

        <div class="text-center mt-4">
          <a href="<?=site_url('/what-we-do')?>" class="btn px-4 py-2 text-white rounded bg-primary">
            EXPLORE MORE WHAT WE DO
          </a>
        </div>
      </div>
    </div>
    <!-- WHAT WE DO End -->