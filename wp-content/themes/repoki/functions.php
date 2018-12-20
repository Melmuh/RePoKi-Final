<?php
$version = '1.0';
// Adding Style CSS & JS
function repoki_assets() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '../style.css', false, $version, 'all') ;
  // wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/layout.js', false, $version, true);
}
 
add_action( 'wp_enqueue_scripts', 'repoki_assets' );

// Register Menus
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
add_action( 'init', 'register_my_menus' );
