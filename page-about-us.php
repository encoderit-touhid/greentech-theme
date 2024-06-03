<?php
/* Template Name: About Us */

get_header();
?>

<div class="container-fluid page-header py-5">
      <h1 class="text-center text-white display-6">About Us</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="<?php echo site_url()?>">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
        <li class="breadcrumb-item active text-white">About Us</li>
      </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- About us start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px">
          <h2 class="display-4">ABOUT US</h2>
          <p>
            Greentech was founded in 2009 by a team of passionate engineers and
            entrepreneurs who wanted to make a positive impact on the world by
            using smart technologies.
          </p>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="p-4 rounded bg-light">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <img
                    src="<?=GREENTECH_THEME_ASSETS_URI.'img/about-us.svg'?>"
                    class="img-fluid rounded w-100"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <p>
                    Our vision is to create a greener and smarter future for our
                    clients and society.
                  </p>
                  <p>
                    Our mission is to provide high-quality and customized
                    solutions that meet the needs and challenges of different
                    sectors. We have a strong and diverse team of experts in
                    IoT, AI, system design, integration, consulting, and
                    training.
                  </p>
                  <p>
                    We are based in Kuala Lumpur, Malaysia, but we have
                    successfully completed projects in Saudi Arabia and other
                    countries. We are always looking for new opportunities and
                    partnerships to expand our reach and impact.
                  </p>
                  <a
                    href="<?php echo get_the_permalink()?>"
                    class="btn border border-secondary rounded-pill px-3 text-primary"
                  >
                    LEARN MORE
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About us End -->

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
?>