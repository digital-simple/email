<?php
function load_stylesheets()
{
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
    ); // Auto updating style.css version.
}
add_action('wp_enqueue_scripts', 'load_stylesheets');




// LATITUDE HOMES START ================================================================= 
function register_latitude_homes_post_type()
{
    $args = array(
        'public' => true,
        'label' => 'Latitude Homes',
        'menu_position' => 5,
        // Adjust the menu position as needed
        'menu_icon' => 'dashicons-admin-home',
        // Customize the menu icon
        'capability_type' => 'post',
        'map_meta_cap' => true,
        // Other custom post type parameters...
    );

    register_post_type('latitudehomes', $args);
}
add_action('init', 'register_latitude_homes_post_type');


function restrict_dashboard_menu_for_test_user()
{
    // Check if the user is logged in and has the username "test"
    if (is_user_logged_in() && 'test' === wp_get_current_user()->user_login) {
        global $menu, $submenu;

        remove_menu_page('edit.php'); // Remove the default "Posts" menu        

        // Get all registered post types
        $post_types = get_post_types();

        // Keep only the "latitudehomes" post type and remove others
        foreach ($post_types as $post_type) {
            if ($post_type !== 'latitudehomes') {
                remove_menu_page('edit.php?post_type=' . $post_type);
            }
        }
    }
}
add_action('admin_menu', 'restrict_dashboard_menu_for_test_user');

// LATITUDE HOMES END =================================================================  



// function restrict_dashboard_menu_for_test_user() {
//     // Check if the user is logged in and has the username "test"
//     if ( is_user_logged_in() && 'test' === wp_get_current_user()->user_login ) {
//         // Remove menu items for other post types
//         remove_menu_page('edit.php'); // Remove the default "Posts" menu
//         remove_menu_page('edit.php?post_type=page'); // Remove the default "Pages" menu

//         // Remove other custom post types
//         remove_menu_page('edit.php?post_type=ds');    

//     }
// }
// add_action('admin_menu', 'restrict_dashboard_menu_for_test_user');


// Register the 'DS' custom post type
function register_ds_post_type()
{
    $args = array(
        'public' => true,
        'label' => 'DS',
        'menu_position' => 5,
        // Adjust the menu position as needed
        'menu_icon' => 'dashicons-admin-home',
        // Customize the menu icon
        'capability_type' => 'post',
        'map_meta_cap' => true,
        // Other custom post type parameters...
    );

    register_post_type('ds', $args);
}
add_action('init', 'register_ds_post_type');