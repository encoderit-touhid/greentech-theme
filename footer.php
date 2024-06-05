<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greentech
 */
$menu_items = wp_get_menu_array_footer('greentech_footer_menu_1');
?>

<footer>
      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-5"> 
          <div
            class="pb-4 mb-4 pb-lg-5 mb-lg-5"
            style="border-bottom: 1px solid rgba(226, 175, 24, 0.5)"
          >
            <div class="row g-4 align-items-center">
              <div class="col-lg-3">
                <a href="<?php echo site_url()?>" class="navbar-brand">
                  <img
                    src="<?=get_option('site_logo_footer')?>"
                    alt="GreenTec Logo"
                  />
                </a>
              </div>
              <div class="col-lg-6 py-4 py-lg-0">
                <!-- <div class="position-relative mx-auto">
                  <input
                    class="form-control border-0 w-100 py-3 px-4 rounded-pill"
                    type="email"
                    placeholder="Your Email"
                  />
                  <button
                    type="submit"
                    class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white"
                    style="top: 0; right: 0"
                  >
                    Subscribe Now
                  </button>
                </div> -->
                <div class="w-100 footer_Subscribe_form position-relative">
                <?=do_shortcode('[forminator_form id="117"]')?>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="d-flex justify-content-end">
                  <a
                    class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                    href="<?=get_option('greentech_twitter')?>"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a
                    class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                    href="<?=get_option('greentech_facebook')?>"
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a
                    class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                    href="<?=get_option('greentech_youtube')?>"
                  >
                    <i class="fab fa-youtube"></i>
                  </a>
                  <a
                    class="btn btn-outline-secondary btn-md-square rounded-circle"
                    href="<?=get_option('greentech_linkedln')?>"
                  >
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <div class="footer-item">
                <h4 class="text-light mb-3">Our Vision and Mission</h4>
                <p class="mb-4">
                 <?php echo get_option('greentech_footer_mission_vision')?>
                </p>
                <a
                  href="<?php echo site_url('/')?>#visionMission"
                  class="btn border-secondary py-2 px-4 rounded-pill text-primary"
                >
                  Read More
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <h4 class="text-light mb-3">Quick Links</h4>
              <div class="row">
                <div
                  class="col-lg-6 col-md-6 d-flex flex-column text-start footer-item"
                >
                <?php 
                foreach($menu_items as $key=>$val)
                {
                     ?>
                     <a class="btn-link" href="<?=$val['url']?>"><?=$val['title']?></a>
                     <?php
                }
                  ?>
                </div>
                <div
                  class="col-lg-6 col-md-6 d-flex flex-column text-start footer-item"
                >
                <?php
                 foreach(get_secotor_menu_cpts() as $key2=>$val2)
                 {
                    ?>
                     <a class="btn-link" href="<?=$val2['link']?>"><?=$val2['title']?></a>
                     <?php
                 }
                
                ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-item">
                <h4 class="text-light mb-3">Contact</h4>
                <p>
                  <strong>Address:</strong> <?=get_option('greentech_address')?>
                </p>
                <p>
                  <strong>Email:</strong>
                  <a class="text-white-50" href="mailto:<?=get_option('greentech_email')?>">
                  <?=get_option('greentech_email')?>
                  </a>
                </p>
                <p>
                  <strong>Phone:</strong>
                  <a class="text-white-50" href="tel:<?=get_option('greentech_phone')?>">
                  <?=get_option('greentech_phone_number')?>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Copyright Start -->
      <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <span class="text-light">
                <a href="<?=site_url()?>">
                  <i class="fas fa-copyright text-light me-2"></i>GreenTec</a
                >, All right reserved.
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->
    </footer>
     <!-- Back to Top -->
     <a
      href="#"
      class="btn btn-primary border-3 border-primary rounded-circle back-to-top"
    >
      <i class="fa fa-arrow-up"> </i>
    </a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
