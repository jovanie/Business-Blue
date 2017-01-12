<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'call-to-action' => __( 'Call To Action' ),
      'footer-menu' => __( 'Footer Menu' ),
      'footer-col-1' => __( 'Footer Column 1' ),
      'footer-col-2' => __( 'Footer Column 2' ),
      'footer-col-3' => __( 'Footer Column 3' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
