<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greentech
 */

get_header();
?>

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-lg-5 hero-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div
              id="carouselId"
              class="carousel slide position-relative"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active rounded">
                  <img
                    src="<?=GREENTECH_THEME_ASSETS_URI.'img/slider-img-1.jpg'?>"
                    class="img-fluid w-100 h-100 bg-secondary rounded"
                    alt="First slide"
                  />
                  <div class="content">
                    <h1>
                      Elevate your dishes and bring new depth to your cooking
                      with our organic herbs
                    </h1>
                    <a href="#products_services_section" class="btn px-4 py-2 text-white rounded">
                      EXPLORE OUR PRODUCTS
                    </a>
                  </div>
                </div>
                <div class="carousel-item rounded">
                  <img
                    src="<?=GREENTECH_THEME_ASSETS_URI.'img/slider-img-3.jpg'?>"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Second slide"
                  />
                  <div class="content">
                    <h2>
                      Whether you are a gourmet cook, a seasoned herb
                      enthusiast, or simply looking for a convenient and healthy
                      way to add flavor to your meals, our organic herbs are the
                      perfect choice.
                    </h2>
                    <a href="#products_services_section" class="btn px-4 py-2 text-white rounded">
                      EXPLORE OUR PRODUCTS
                    </a>
                  </div>
                </div>
                <div class="carousel-item rounded">
                  <img
                    src="<?=GREENTECH_THEME_ASSETS_URI.'img/slider-img-2.jpg'?>"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Second slide"
                  />
                  <div class="content">
                    <h2>Dedicated to provide the highest quality herbs</h2>
                    <a href="#products_services_section"  class="btn px-4 py-2 text-white rounded">
                      EXPLORE OUR PRODUCTS
                    </a>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Featurs Section Start -->
    <div class="container-fluid featurs featurs_section py-5">
      <div class="container py-5">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto"
              >
                <i class="bi bi-cloud-check fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <p class="mb-0">
                  At GREENTEC, we are at the forefront of IoT technology, sensor
                  deployment, and cloud computing.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto"
              >
                <i class="bi bi-person-check fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <p class="mb-0">
                  Our extensive experience and deep expertise in these fields
                  enable us to empower businesses with innovative IoT solutions.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto"
              >
                <i class="bi bi-arrow-repeat fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <p class="mb-0">
                  By integrating devices, sensors, and networks, we facilitate
                  real-time data analysis.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto"
              >
                <i class="bi bi-lightning-charge fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <p class="mb-0">
                  Leveraging the power of cloud computing, we ensure our
                  solutions are scalable, flexible, and secure.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a
            href="<?php echo site_url('/about-us')?>"
            class="btn px-4 py-2 text-white rounded bg-primary"
          >
            LEARN MORE
          </a>
        </div>
      </div>
    </div>
    <!-- Featurs Section End -->

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
                    href="<?=site_url('/about-us')?>"
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
<!-- WHAT WE DO start -->
	<?php get_template_part('/template-parts/home-page/what-we-do'); ?>
<!-- WHAT WE DO End -->

    <!-- Case Studies Start-->
	<?php get_template_part('/template-parts/home-page/case-studies'); ?>
    <!-- Case Studies End-->

    <!-- Banner Section Start-->
    <div class="container-fluid banner banner_sec bg-secondary my-5">
      <div class="container py-5">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="py-4">
              <h2 class="display-3 text-white">Explore Our Sectors</h2>
              <p class="mb-4 text-dark">
                Discover how GREENTEC's smart technologies can transform your
                industry. Contact us to learn more about our tailored solutions
                and successful projects across various sectors. Join us on your
                digital transformation journey towards success.
              </p>
              <a
                href="<?=site_url('/contact-us')?>"
                class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5"
              >
                Contact Us
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="position-relative">
              <img
                src="<?=GREENTECH_THEME_ASSETS_URI.'img/ExploreOur.svg'?>"
                class="banner_img img-fluid w-100 rounded"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Section End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite products_services_section py-5" id="products_services_section">
      <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 700px">
          <h2 class="display-4">Products & Services</h2>
        </div>
        <div class="bg-light p-4 p-md-5 rounded">
          <div class="bg-white rounded p-3 p-md-5 counter text-start">
            <div class="row g-4 align-items-center">
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h4>Hydroponics Systems and IoT Technology Solutions</h4>
                <p class="mb-0">
                  At GREENTEC, we offer cutting-edge hydroponics systems
                  integrated with advanced IoT technology to revolutionize
                  modern farming. Our solutions are designed to enhance
                  efficiency, productivity, and sustainability in agricultural
                  practices. Here’s a summary of our products and services
                </p>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <img
                  src="<?=GREENTECH_THEME_ASSETS_URI.'img/Hydroponics-Systems.png'?>"
                  class="hydroponics_img w-100"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div class="my-5">
          <h2 class="mb-0">Products</h2>
        </div>
		<?php get_template_part('/template-parts/home-page/products'); ?>
      </div>
    </div>
    <!-- Fruits Shop End-->

    <!-- Vesitable Shop Start-->
    <div class="container-fluid fruite services_slider_section vesitable py-5">
      <div class="container py-5">
        <h2 class="mb-0">Services</h2>
		<?php get_template_part('/template-parts/home-page/services'); ?>
      </div>
    </div>
    <!-- Vesitable Shop End -->

    <!-- Banner Section Start-->
    <div
      id="visionMission"
      class="container-fluid banner banner_sec bg-light my-5 mt-0"
    >
      <div class="container py-5">
        <div class="row rounded bg-white">
          <div class="col-12">
            <div class="p-2 p-lg-4">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <img
                    src="<?=GREENTECH_THEME_ASSETS_URI.'img/VisionMission2.svg'?>"
                    class="img-fluid rounded w-100"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <h2 class="display-6">
                    Transform Your Farming Practices with GREENTEC
                  </h2>
                  <p class="mb-2">
                    Join us in harnessing the power of hydroponics and IoT
                    technology to take your agricultural operations to the next
                    level. Our innovative solutions are designed to enhance
                    productivity, reduce environmental impact, and ensure
                    sustainable farming practices.
                  </p>
                  <p class="mb-4">
                    Contact us today to learn more about how GREENTEC can help
                    you achieve your farming goals.
                  </p>
                  <a
                    href="<?=site_url('/contact-us')?>"
                    class="btn border border-secondary rounded-pill px-3 text-primary"
                  >
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="p-2 p-lg-4">
              <div class="row align-items-center">
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <h2 class="display-6">Our Vision and Mission</h2>
                  <p class="mb-2">
                    Founded in 2009 by a team of passionate engineers and
                    entrepreneurs, GREENTEC aims to make a positive impact on
                    the world through smart technologies. Our vision is to
                    create a greener and smarter future for our clients and
                    society.
                  </p>
                  <p class="mb-4">
                    Our mission is to provide high-quality, customized solutions
                    that meet the needs and challenges of various sectors.
                  </p>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                  <img
                    src="<?=GREENTECH_THEME_ASSETS_URI.'img/VisionMission.svg'?>"
                    class="img-fluid rounded w-100"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Section End -->

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
