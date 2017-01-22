<?php

namespace App;

use Roots\Sage\Container;
use Illuminate\Contracts\Container\Container as ContainerContract;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array $parameters
 * @param ContainerContract $container
 *
 * @return ContainerContract|mixed
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
function sage( $abstract = null, $parameters = [], ContainerContract $container = null ) {
	$container = $container ?: Container::getInstance();
	if ( ! $abstract ) {
		return $container;
	}

	return $container->bound( $abstract )
		? $container->make( $abstract, $parameters )
		: $container->make( "sage.{$abstract}", $parameters );
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 *
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config( $key = null, $default = null ) {
	if ( is_null( $key ) ) {
		return sage( 'config' );
	}
	if ( is_array( $key ) ) {
		return sage( 'config' )->set( $key );
	}

	return sage( 'config' )->get( $key, $default );
}

/**
 * @param string $file
 * @param array $data
 *
 * @return string
 */
function template( $file, $data = [] ) {
	return sage( 'blade' )->render( $file, $data );
}

/**
 * Retrieve path to a compiled blade view
 *
 * @param $file
 * @param array $data
 *
 * @return string
 */
function template_path( $file, $data = [] ) {
	return sage( 'blade' )->compiledPath( $file, $data );
}

/**
 * @param $asset
 *
 * @return string
 */
function asset_path( $asset ) {
	return sage( 'assets' )->getUri( $asset );
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar() {
	static $display;
	isset( $display ) || $display = apply_filters( 'sage/display_sidebar', false );

	return $display;
}

/**
 * Page titles
 * @return string
 */
function title() {

	//palautetaan toistaiseksi vain blogin nimi
	return get_bloginfo( 'name' );
	if ( is_home() ) {
		if ( $home = get_option( 'page_for_posts', true ) ) {
			return get_the_title( $home );
		}

		return __( 'Latest Posts', 'sage' );
	}
	if ( is_archive() ) {
		return get_the_archive_title();
	}
	if ( is_search() ) {
		return sprintf( __( 'Search Results for %s', 'sage' ), get_search_query() );
	}
	if ( is_404() ) {
		return __( 'Not Found', 'sage' );
	}

	return get_the_title();
}

function outputNutrients( $ravintoaineet, $finnish_names, $related_food_id ) {
	ob_start();
	?>
	<?php foreach ( $ravintoaineet as $ravintoaine ) : ?>
		<li class="list-group-item justify-content-between nutrient">
			<span class="nutrient__label"><?php echo esc_html( $finnish_names[ $ravintoaine ] ); ?>:</span>
			<span class="nutrient__value">
				<?php echo esc_html( round( get_post_meta( $related_food_id, $ravintoaine, true ), 0 ) ); ?>
				<?php echo esc_html( get_unit( $ravintoaine ) ); ?>
			</span>
		</li>
	<?php endforeach; ?>
	<?php
	return ob_get_clean();
}

function get_unit( $metakey ) {
	$unit = array();
	$unit['ir_foodId'] = '';
	$unit['ir_kuitu'] = 'g';
	$unit['ir_energy'] = 'kcal';
	$unit['ir_hiilihydraatti'] = 'g';
	$unit['ir_rasva'] = 'g';
	$unit['ir_proteiini'] = 'g';
	$unit['ir_sokeri'] = 'g';
	$unit['ir_kalsium'] = 'mg';
	$unit['ir_rauta'] = 'mg';
	$unit['ir_jodidi'] = 'µg';
	$unit['ir_kalium'] = 'mg';
	$unit['ir_magnesium'] = 'mg';
	$unit['ir_natrium'] = 'mg';
	$unit['ir_suola'] = 'mg';
	$unit['ir_fosfori'] = 'mg';
	$unit['ir_seleeni'] = 'µg';
	$unit['ir_sinkki'] = 'mg';
	$unit['ir_folaatti'] = 'µg';
	$unit['ir_niasiiniekvivalentti'] = 'mg';
	$unit['ir_niasiini'] = 'mg';
	$unit['ir_b6'] = 'mg';
	$unit['ir_b2'] = 'mg';
	$unit['ir_b1'] = 'mg';
	$unit['ir_b12'] = 'µg';
	$unit['ir_C'] = 'mg';
	$unit['ir_A_RAE'] = 'µg';
	$unit['ir_karotenoidit'] = 'µg';
	$unit['ir_D'] = 'µg';
	$unit['ir_E'] = 'mg';
	$unit['ir_K'] = 'µg';

	return $unit[ $metakey ];
}

function get_value_and_unit( $related_food_id, $metakey ) {
	// Bail early, if no related_food_id is set
	if ( $related_food_id <= 0 ) {
		return '';
	}
	$text = ' ';
	$text .= round( get_post_meta( $related_food_id, $metakey, true ), 0 );
	$text .= get_unit( $metakey );

	return $text;
}
