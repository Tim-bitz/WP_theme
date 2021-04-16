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
 function register_menus() {
     register_nav_menu('header-menu', 'headerMenu');
 }

?>