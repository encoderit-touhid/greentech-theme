<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greentech
 */

get_header();
?>
   <div class="container-fluid page-header py-5">
      <h1 class="text-center text-white display-6">Manufacturing</h1>
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="<?=site_url()?>">Home</a></li>
        <li class="breadcrumb-item">
          <a href="#">Sectors</a>
        </li>
        <li class="breadcrumb-item active text-white"><?=get_the_title()?></li>
      </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Case Studies Start-->
    <?=get_the_content()?>
   

<?php
get_footer();
