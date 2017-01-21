<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter( 'body_class', function ( array $classes ) {
	// Add page slug if it doesn't exist
	if ( is_single() || is_page() && ! is_front_page() ) {
		if ( ! in_array( basename( get_permalink() ), $classes ) ) {
			$classes[] = basename( get_permalink() );
		}
	}

	// Add class if sidebar is active
	if ( display_sidebar() ) {
		$classes[] = 'sidebar-primary';
	}

	return $classes;
} );

/**
 * Add "… Continued" to the excerpt
 */
add_filter( 'excerpt_more', function () {
	return ' &hellip; <a href="' . get_permalink() . '">' . __( 'Continued', 'sage' ) . '</a>';
} );

/**
 * Template Hierarchy should search for .blade.php files
 */
array_map( function ( $type ) {
	add_filter( "{$type}_template_hierarchy", function ( $templates ) {
		return call_user_func_array( 'array_merge', array_map( function ( $template ) {
			$transforms          = [
				'%^/?(templates)?/?%'   => config( 'sage.disable_option_hack' ) ? 'templates/' : '',
				'%(\.blade)?(\.php)?$%' => '',
			];
			$normalized_template = preg_replace( array_keys( $transforms ), array_values( $transforms ), $template );

			return [ "{$normalized_template}.blade.php", "{$normalized_template}.php" ];
		}, $templates ) );
	} );
}
	, [
		'index',
		'404',
		'archive',
		'author',
		'category',
		'tag',
		'taxonomy',
		'date',
		'home',
		'frontpage',
		'page',
		'paged',
		'search',
		'single',
		'singular',
		'attachment',
	]
);

/**
 * Render page using Blade
 */
add_filter( 'template_include', function ( $template ) {
	$data = array_reduce( get_body_class(), function ( $data, $class ) use ( $template ) {
		return apply_filters( "sage/template/{$class}/data", $data, $template );
	}, [] );
	echo template( $template, $data );

	// Return a blank file to make WordPress happy
	return get_theme_file_path( 'index.php' );
}, PHP_INT_MAX );

/**
 * Tell WordPress how to find the compiled path of comments.blade.php
 */
add_filter( 'comments_template', 'App\\template_path' );

/**
 *
 */
add_filter( 'sage/display_sidebar', function ( $display ) {
	static $display;

	isset( $display ) || $display = in_array( true, [
		// The sidebar will be displayed if any of the following return true
		is_single(),
		is_404(),
		is_page_template( 'template-custom.php' ),
		is_singular( 'food' ),
	], true );

	return $display;
} );
