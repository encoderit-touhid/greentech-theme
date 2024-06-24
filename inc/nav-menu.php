<?php
function bootstrap_nav_menu_config()
{
  register_nav_menus(array(

    "greentech_top_menu" => "greentech Top Menu",

    "greentech_footer_menu_1" => "greentech Footer Menu 1",

    "greentech_footer_menu_2" => "green Footer Menu 2",

  ));
}
add_action("after_setup_theme", "bootstrap_nav_menu_config");


function wp_get_menu_array($current_menu='Main Menu') {

    $menu_array = wp_get_nav_menu_items( wp_get_nav_menu_name($current_menu));
    
    

    $menu = array();

    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)){
            foreach ($menu_array as $k=>$m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        }
    }

    return $menu;

}

function wp_get_menu_array_footer($current_menu='Main Menu') {

    $menu_array = wp_get_nav_menu_items( wp_get_nav_menu_name($current_menu));
    
    

    $menu = array();

    function populate_children_footer($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)){
            foreach ($menu_array as $k=>$m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children_footer($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children_footer($menu_array, $m);
        }
    }

    return $menu;

}

function get_secotor_menu_cpts()
{
    $args = array(
        'post_status' => 'publish',
        'post_type'   => 'greentech_sectors',
		'posts_per_page'=>-1
      );
      
      $query = get_posts($args);
      $menu_sectors=[];
      foreach($query as $val)
      {
        $single['title']=$val->post_title;
        $single['link']=get_the_permalink($val->ID);
        $menu_sectors[]=$single;
      }
     return  $menu_sectors;
}