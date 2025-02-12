<?php

/**
 * Register the nav menus used in this theme
 * @return null
 */
add_theme_support( 'menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );
