<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greentech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
 wp_body_open(); 

 $menu_items = wp_get_menu_array('greentech_top_menu');

// dd( $menu_items );
//exit;

?>
<div
      id="spinner"
      class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
      <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-center">
          <div class="top-info ps-2">
            <small class="me-3">
              <i class="fas fa-map-marker-alt me-2 text-secondary"></i>
              <a href="#" class="text-white">
                <!-- No. 63-2, Tingkat 2, Jalan Melati Utama 4,  -->Taman Melati
                Utama, Setapak, 53100 Kuala Lumpur
              </a>
            </small>
            <small class="me-3">
              <i class="fas fa-envelope me-2 text-secondary"></i>
              <a href="mailto:info@greentek.my" class="text-white"
                >info@greentek.my
              </a>
            </small>
          </div>
        </div>
      </div>
      <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
          <a href="<?php echo site_url()?>" class="navbar-brand">
            <img src="<?=GREENTECH_THEME_ASSETS_URI.'img/greentec-logo.png'?>" alt="GreenTec Logo" />
          </a>
          <button
            class="navbar-toggler py-2 px-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars text-primary"></span>
          </button>
          <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
             <?php 
             foreach($menu_items as $key=>$val)
             {
                   if(get_the_title() == $val['title'])
                      {
                            $class='active';
                      }
                      else
                      {
                            $class='';
                      }
                       if(empty($val['children']) && $val['title'] != "Sectors")
                        {
                            ?>
                            
                            <a href="<?=$val['url']?>" class="nav-link nav-item <?=$class;?>"><?=$val['title']?></a>
                           
                            <?php
                        }elseif(!empty($val['children']) && $val['title'] != "Sectors")
                        {
                          ?>
                          <div class="nav-item dropdown">
                          <a
                           href="#"
                           class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown"
                         >
                           <?=$val['title']?>
                         </a>
                         <div class="dropdown-menu m-0 rounded-0">
                         <?php
                         foreach($val['children'] as $key2=>$val2)
                         {
                           if(get_the_title() == $val2['title'])
                          {
                           $class1='active';
                          }
                           else
                           {
                           $class1='';
                          }

                             ?>
                             <li>
                             <a href="<?=$val2['url']?>" class="dropdown-item <?=$class1?>"><?=$val2['title']?></a>
                            </li>
                             <?php
                         }
                         
                        ?>
                         </div>
                       </div>
                         
                         <?php
                           
                        }
                        if(empty($val['children']) && $val['title'] == "Sectors" && $val['ID'] == 108)
                        {
                         
                          ?>
                          <div class="nav-item dropdown">
                          <a
                           href="#"
                           class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown"
                         >
                           <?=$val['title']?>
                         </a>
                         <div class="dropdown-menu m-0 rounded-0">
                         <?php
                         foreach(get_secotor_menu_cpts() as $key2=>$val2)
                         {
                           if(get_the_title() == $val2['title'])
                          {
                           $class1='active';
                          }
                           else
                           {
                           $class1='';
                          }

                             ?>
                             <li>
                             <a href="<?=$val2['link']?>" class="dropdown-item <?=$class1?>"><?=$val2['title']?></a>
                            </li>
                             <?php
                         }
                         
                        ?>
                         </div>
                       </div>
                         
                         <?php
                          
                        }
             }
             
             ?>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->