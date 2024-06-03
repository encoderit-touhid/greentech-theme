<?php
get_header();
?>
 <!-- Single Page Header start -->
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
   
    
    <!-- Case Studies End-->
<?php
get_footer();