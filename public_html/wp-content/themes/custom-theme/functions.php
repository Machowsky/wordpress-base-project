<?php
// Composer dependencies
if (file_exists(trailingslashit(get_template_directory()) . '/vendor/autoload.php')) {
	require trailingslashit(get_template_directory()) . '/vendor/autoload.php';
}

/*
* Include all custom functions
*/
foreach ( glob( get_template_directory() . "/includes/custom_functions/*.php" ) as $filename ) {
    include $filename;
}

/*
* Include all post-types
*/
foreach ( glob( get_template_directory() . "/includes/post-types/*.php" ) as $filename ) {
    include $filename;
}

/*
* Include taxonomies
*/
foreach ( glob( get_template_directory() . "/includes/taxonomies/*.php" ) as $filename ) {
    include $filename;
}

/*
* Include all WP extensions
*/
foreach ( glob( get_template_directory() . "/includes/wp-extensions/*.php" ) as $filename ) {
    include $filename;
}

/*
* Include all scripts 
*/
foreach ( glob( get_template_directory() . "/includes/scripts/*.php" ) as $filename ) {
    include $filename;
}