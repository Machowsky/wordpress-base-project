<?php

/**
 * Remove Extra CSS tab in customizer
 */
function remove_custom_css($wp_customize) {    
  $wp_customize->remove_section( 'custom_css' );
}

add_action( 'customize_register', 'remove_custom_css', 11 );