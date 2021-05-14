<?php

//subscribea på grejer

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');



//skapa widgets

// register_sidebar(
//     [
//         'name' => '',
//         'description' => '',
//         'id' => '',
//         'before_widget' => ''
//     ]
// );


//registrera meny
 function register_menu() {
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('sideMenu', 'Side Menu');
 }

 add_action('after_setup_theme', 'register_menu');

?>