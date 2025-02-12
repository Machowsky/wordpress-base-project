<?php

/**
 * Enqueue the styles needed in this theme
 * @return null
 */
function action__enqueue_styles() {
    $version = '2.0.1';

    wp_register_style( 'ionicons', 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', null, $version, 'all' );
    wp_enqueue_style( 'ionicons' );

    wp_register_style( 'main', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/dist/main.min.css', null, $version, 'all' );
    wp_enqueue_style( 'main' );

    wp_register_style( 'typekit', 'https://use.typekit.net/iti0jpr.css');
    wp_enqueue_style( 'typekit' );
}

add_action( 'wp_enqueue_scripts', 'action__enqueue_styles', 12, 1 );


/**
 * Enqueue the scripts needed in this theme
 * @return null
 */
function action__enqueue_scripts() {
    if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
    }

    global $wp_query;
    $version = '2.0.1';

    wp_register_script('main', trailingslashit(get_stylesheet_directory_uri()) . 'assets/dist/main.min.js', null, $version, 'all');
    wp_enqueue_script('main');

    
    // wp_enqueue_script( 'tweenlite', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js', array(), $version, false );
    // wp_enqueue_script( 'cssplugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js', array('tweenlite'), $version, false );
    // wp_enqueue_script( 'tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', array('tweenlite'), $version, false );
    // wp_enqueue_script( 'tweenmax-easepack', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/easing/EasePack.min.js', array('tweenlite'), $version, false );
    // wp_enqueue_script( 'tweenmax-scrolltoplugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js', array('tweenlite'), $version, false );


    $post_id = '';
    if ( is_object( $wp_query->post ) ) {
        $post_id = $wp_query->post->ID;
    }

    // Make some variables available in the javascript file. Globally.
    wp_localize_script( 'main', 'themevars', array(
        'ajaxurl'    => admin_url( 'admin-ajax.php' ),
        'post_id' => $post_id
    ) );
}

add_action( 'wp_enqueue_scripts', 'action__enqueue_scripts', 12, 1 );



// // admin_enqueue_scripts use this action to add style or enhance the backend side
// /**
//  * Enqueue the scripts needed in the backend of this theme
//  * @return null
//  */
// function action__admin_enqueue_scripts() {
//     global $post_type;
//     if( $post_type == 'post' ) {
//         wp_enqueue_script( 'admin_main', trailingslashit( get_template_directory_uri() ) . 'assets/js/admin/admin-main.js' );
//     }
// }
// add_action( 'admin_enqueue_scripts', 'action__admin_enqueue_scripts' );
