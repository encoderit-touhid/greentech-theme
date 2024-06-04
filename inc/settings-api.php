<?php

function all_option_init()
{

    $option_key = array(

        'greentech_phone_number' => '6013-2042049',
        'greentech_email' => ' info@greentek.my',
        'greentech_address' => 'Taman Melati Utama, Setapak, 53100 Kuala Lumpur',
        'greentech_footer_mission_vision'=>'',
        // 'green_tech_location_google_map' => 'https://maps.app.goo.gl/QWtoGWUaYPCwYDmo9',
        // 'green_tech_copyright' => '© Copyright 2022 Remax Lifetime Realtors All Rights Reserved.',
        'site_logo' => ' ',
        'site_logo_footer' => ' ',

    );
    $option_key_url = array(
        'greentech_facebook' => 'facebook.com',
        'greentech_twitter' => 'twitter.com',
        'greentech_linkedln' => 'linkedln.com',
        'greentech_youtube' => 'youtube.com',
    );

    foreach ($option_key as $key => $value) {
        add_option($key, $value);
    }
    foreach ($option_key_url as $key => $value) {
        add_option($key, esc_url($value));
    }
}

add_action('init', 'all_option_init');




function green_tech_example_theme_menu()
{

    add_theme_page(
        'Green Tech Settings',                     // The title to be displayed in the browser window for this page.
        'Green Tech Settings',                    // The text to be displayed for this menu item
        'administrator',                    // Which type of users can see this menu item
        'green_tech_theme_options',            // The unique ID - that is, the slug - for this menu item
        'green_tech_theme_display'                // The name of the function to call when rendering this menu's page
    );

    // add_menu_page(
    //     'General Options',                    // The value used to populate the browser's title bar when the menu page is active
    //     'General Options',                    // The text of the menu in the administrator's sidebar
    //     'administrator',                    // What roles are able to access the menu
    //     'green_tech_theme_menu',                // The ID used to bind submenu items to this menu 
    //     'green_tech_theme_display',              // The callback function used to render this menu
    //     '',
    //     10        
    // );
}
add_action('admin_menu', 'green_tech_example_theme_menu');


function green_tech_theme_display($active_tab = '')
{
?>
<style>
form {
    margin: 10px;
    padding: 30px;
    background: #F5F5F5;
}

label {
    display: block;
    font-weight: bold;
    margin: 15px 0;
}

input {
    padding: 2px;
    border: 1px solid #eee;

    color: #777;
}

textarea {
    width: 400px;
    padding: 2px;
    text-align: justify;
    white-space: normal;
    border: 1px solid #eee;
    height: 100px;
    display: block;
    color: #333;
}

input.buttons {
  
    height: 50px;
    width: 150px;
    margin-top: 20px;
    margin-left: 200px;
    margin-bottom: 50px;
    cursor: pointer;
    color: #333;
    background: #e7e6e6;
    border: 1px solid #dadada;
}
input[type="button"].upload_image_button
{
 width: 100%;
 background-color: aquamarine;
 padding: 13px;
 margin: 10px;

}

</style>
    <div class="wrap">

        <div id="icon-themes" class="icon32"></div>
        <h2><?php _e('Green Tech Settings Options', 'energym'); ?></h2>


        <?php if (isset($_GET['tab'])) {
            $active_tab = $_GET['tab'];
        } else if ($active_tab == 'social_options') {
            $active_tab = 'social_options';
        } else {
            $active_tab = 'display_options';
        } // end if/else 
        ?>

        <h2 class="nav-tab-wrapper">
            <a href="?page=green_tech_theme_options&tab=display_options" class="nav-tab <?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?>"><?php _e('Site Information', 'energym'); ?></a>
            <a href="?page=green_tech_theme_options&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>"><?php _e('Social Options', 'energym'); ?></a>
        </h2>

        <?php
        if ($active_tab == 'display_options') {

            site_information_display();
        } else {

            social_information_display();
        }  // end if/else

        ?>



    </div><!-- /.wrap -->
<?php
}

function site_information_display()
{




    $option_key = array(

        'greentech_phone_number' => '6013-2042049',
        'greentech_email' => ' info@greentek.my',
        'greentech_address' => 'Taman Melati Utama, Setapak, 53100 Kuala Lumpur',
        'greentech_footer_mission_vision'=>'',
        // 'green_tech_location_google_map' => 'https://maps.app.goo.gl/QWtoGWUaYPCwYDmo9',
        // 'green_tech_copyright' => '© Copyright 2022 Remax Lifetime Realtors All Rights Reserved.',
        'site_logo' => ' ',
        'site_logo_footer' => ' ',
        
    );


?>

    <div style="padding: 30px;">




        <form action="" method='POST' enctype="multipart/form-data" id="option_page_display_options">

            <?php

            foreach ($option_key as $key => $value) {
            ?>

                <label for=""><?php echo ucwords(str_replace('_', ' ', $key)) ?> :</label>
                <?php
                if ($key == 'greentech_footer_mission_vision') {
                    $value = get_option($key);

                ?>
                    <textarea name="greentech_footer_mission_vision" style="width:100%" id="greentech_footer_mission_vision"><?php echo  $value; ?></textarea>
                <?php
                } elseif ($key == 'site_logo' || $key == 'site_logo_footer' || $key == 'home_page_banner') {
                ?>
                    <input type="button" class="upload_image_button" value="Upload Image" id="<?php echo $key; ?>">
                    <input type="hidden" name="<?php echo $key; ?>" value="<?php echo get_option($key); ?>" id="<?php echo $key . '_hidden'; ?>">
                    <img src="<?php echo get_option($key); ?>" alt="" width="100px; height:100px" id="<?php echo $key . '_display'; ?>">

                <?php
                }
                else {
                ?>

                    <input type="text" name="<?php echo $key; ?>" value="<?php echo get_option($key); ?>" style="width:100%;">
                <?php
                }
                ?>

            <?php
            }

            ?>
            <div style="margin-top:20px">

                <input class="buttons" type="submit" name="btn">
            </div>
        </form>
    </div>

    <script>
        jQuery(function() {

            jQuery('#option_page_display_options').on('submit', function(e) {
                e.preventDefault();
                var formdata = jQuery('#option_page_display_options').serialize();
                jQuery.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'action': 'option_page_site_information',
                        'formdata': formdata,
                        'nonce': '<?php echo wp_create_nonce('admin-ajax-nonce') ?>'
                    },
                    success: function(data) {
                        if (data.success = 'success') {
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'success',
                                text: 'Save Successfully',
                                showConfirmButton: false,
                                timer: 2500
                            })
                        }
                    }
                });
            })

            jQuery("#site_logo").on("click", function() {

                var images = wp.media({
                    title: "Upload Image",
                    multiple: false
                }).open().on("select", function(e) {
                    var uploadedImages = images.state().get("selection").first();
                    var selectedImages = uploadedImages.toJSON();

                    jQuery("#site_logo_display").attr("src", selectedImages.url);

                    jQuery("#site_logo_hidden").val(selectedImages.url)

                    /*selectedImages.map(function(image){
                      var itemDetails = image.toJSON();
                      console.log(itemDetails.url);
                      });*/

                });
            });

            jQuery("#site_logo_footer").on("click", function() {

                var images = wp.media({
                    title: "Upload Image",
                    multiple: false
                }).open().on("select", function(e) {
                    var uploadedImages = images.state().get("selection").first();
                    var selectedImages = uploadedImages.toJSON();

                    jQuery("#site_logo_footer_display").attr("src", selectedImages.url);

                    jQuery("#site_logo_footer_hidden").val(selectedImages.url)

                    /*selectedImages.map(function(image){
                      var itemDetails = image.toJSON();
                      console.log(itemDetails.url);
                      });*/

                });
            });

            // jQuery("#home_page_banner").on("click", function() {

            // var images = wp.media({
            //     title: "Upload Image",
            //     multiple: false
            // }).open().on("select", function(e) {
            //     var uploadedImages = images.state().get("selection").first();
            //     var selectedImages = uploadedImages.toJSON();

            //     jQuery("#home_page_banner_display").attr("src", selectedImages.url);

            //     jQuery("#home_page_banner_hidden").val(selectedImages.url)

            //     /*selectedImages.map(function(image){
            //     var itemDetails = image.toJSON();
            //     console.log(itemDetails.url);
            //     });*/

            // });
            // });

        });
    </script>



<?php
}
function social_information_display()
{
    $option_key_url = array(
        'greentech_facebook' => 'facebook.com',
        'greentech_twitter' => 'twitter.com',
        'greentech_linkedln' => 'linkedln.com',
        'greentech_youtube' => 'youtube.com',
    );
?>

    <div style="padding: 30px;">




        <form action="" method='POST' enctype="multipart/form-data" id="option_page_display_options_social">

            <?php

            foreach ($option_key_url as $key => $value) {
            ?>

                <label for=""><?php echo ucwords(str_replace('_', ' ', $key)) ?> :</label>

                <input type="text" name="<?php echo $key; ?>" value="<?php echo esc_url(get_option($key)); ?>" style="width:100%;">


            <?php
            }

            ?>
            <div style="margin-top:20px">

                <input class="buttons" type="submit" name="btn">
            </div>
        </form>
    </div>

    <script>
        jQuery(function() {

            jQuery('#option_page_display_options_social').on('submit', function(e) {
                e.preventDefault();
                var formdata = jQuery('#option_page_display_options_social').serialize();
                jQuery.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'action': 'option_page_display_options_social',
                        'formdata': formdata,
                        'nonce': '<?php echo wp_create_nonce('admin-ajax-nonce') ?>'
                    },
                    success: function(data) {
                        if (data.success = 'success') {
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'success',
                                text: 'Save Successfully',
                                showConfirmButton: false,
                                timer: 2500
                            })
                        }
                    }
                });
            })

        });
    </script>



<?php
}
