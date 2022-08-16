<?php

add_action( 'wp_enqueue_scripts', 'package_main_scripts');
if( ! function_exists('package_main_scripts')){
  function package_main_scripts(){
    wp_enqueue_style( 'main', PJ_URI . 'assets/css/main.css', false, PJ_VERSION );
    wp_enqueue_style( 'main-font', PJ_URI . 'assets/font/roboto.css', false, PJ_VERSION );

    wp_enqueue_style( 'font-awesome', PJ_URI . 'assets/font-awesome/css/font-awesome.min.css', false, PJ_VERSION );

    wp_enqueue_style( 'owl-carousel', PJ_URI . 'assets/js/owl-carousel/dist/assets/owl.carousel.min.css', false, PJ_VERSION );
    wp_enqueue_style( 'owl-carousel-default', PJ_URI . 'assets/js/owl-carousel/dist/assets/owl.theme.default.min.css', false, PJ_VERSION );
    wp_enqueue_script( 'owl-carousel-js', PJ_URI . 'assets/js/owl-carousel/dist/owl.carousel.min.js', ['jquery'], false, PJ_VERSION );

    wp_enqueue_script( 'main-js', PJ_URI . 'assets/js/main.js', ['jquery'], false, PJ_VERSION );
    wp_enqueue_script( 'scrollreveal', PJ_URI . 'assets/js/scrollreveal.min.js', array(), false, null );
  }
}

?>
