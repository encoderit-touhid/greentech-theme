<?php
/* Template Name: Contact Us */

get_header();
?>

<div class="container-fluid page-header py-5">
      <h1 class="text-center text-white display-6">Contact Us</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="<?php echo site_url()?>">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
        <li class="breadcrumb-item active text-white">Contact Us</li>
      </ol>
    </div>
    <!-- Single Page Header End -->

    <div class="container-fluid contact py-5">
      <div class="container py-5">
        <div class="p-3 p-lg-5 bg-light rounded">
          <div class="row g-4">
            <div class="col-12">
              <div class="text-center mx-auto" style="max-width: 700px">
                <h1 class="text-primary">Get in touch</h1>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="h-100 rounded">
                <iframe
                  class="rounded w-100"
                  style="height: 400px"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
            <div class="col-lg-7">
              <div id="contactPageFormS" class="w-100">
                <?=do_shortcode('[forminator_form id="116"]')?></div>
              </div>
              <div class="col-lg-5 address_text_col">
                <div class="d-flex p-3 p-lg-4 py_custom_desktop rounded mb-4 bg-white">
                  <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                  <div>
                    <h5>Address</h5>
                    <p class="">
                      <?=get_option('greentech_address')?>
                    </p>
                  </div>
                </div>
              <div class="d-flex p-3 p-lg-4 py_custom_desktop rounded mb-4 bg-white">
                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                <div>
                  <h5>Mail Us</h5>
                  <p class="">
                    <a href="mailto:<?=get_option('greentech_email')?>"><?=get_option('greentech_email')?></a>
                  </p>
                </div>
              </div>
              <div class="d-flex p-3 p-lg-4 py_custom_desktop rounded bg-white">
                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                <div>
                  <h5>Telephone</h5>
                  <p class="">
                    <a href="tel:<?=get_option('greentech_phone_number')?>"><?=get_option('greentech_phone_number')?></a>
                  </p>
                </div>
              </div>
            </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();
?>