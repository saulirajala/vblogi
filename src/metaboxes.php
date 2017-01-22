<?php
/**
 * Add metaboxes for single-food
 */
function ir_register_food_metabox() {
	$prefix = 'ir_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_food = new_cmb2_box( array(
		'id'           => $prefix . 'food_metabox',
		'title'        => esc_html__( 'Component values', 'cmb2' ),
		'object_types' => array( 'food', ), // Post type
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'energia, laskennallinen', 'cmb2' ),
		'id'   => $prefix . 'energy',
		'type' => 'text_small',
		'desc' => 'kcal'
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Food id', 'cmb2' ),
		'id'   => $prefix . 'foodId',
		'type' => 'text_small',
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Hiilihydraatti', 'cmb2' ),
		'id'   => $prefix . 'hiilihydraatti',
		'type' => 'text_small',
		'desc' => 'g'
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Proteiini', 'cmb2' ),
		'id'   => $prefix . 'proteiini',
		'type' => 'text_small',
		'desc' => 'g'
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Rasva', 'cmb2' ),
		'id'   => $prefix . 'rasva',
		'type' => 'text_small',
		'desc' => 'g'
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Sokerit', 'cmb2' ),
		'id'   => $prefix . 'sokeri',
		'type' => 'text_small',
		'desc' => 'g'
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Kuitu', 'cmb2' ),
		'id'   => $prefix . 'kuitu',
		'type' => 'text_small',
		'desc' => 'g'
	) );
	$cmb_food->add_field( array(
		'name' => esc_html__( 'Folaatti', 'cmb2' ),
		'id'   => $prefix . 'folaatti',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Niasiiniekvivalentti NE', 'cmb2' ),
		'id'   => $prefix . 'niasiiniekvivalentti',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Niasiini (nikotiinihappo + nikotiiniamidi)', 'cmb2' ),
		'id'   => $prefix . 'niasiini',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Pyridoksiini vitameerit (vetykloridi) (B6)', 'cmb2' ),
		'id'   => $prefix . 'b6',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Riboflaviini (B2)', 'cmb2' ),
		'id'   => $prefix . 'b2',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Tiamiini (B1)', 'cmb2' ),
		'id'   => $prefix . 'b1',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'B12-vitamiini (kobalamiini)', 'cmb2 ' ),
		'id'   => $prefix . 'b12',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'C-vitamiini', 'cmb2' ),
		'id'   => $prefix . 'C',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'A-vitamiini', 'vitamiini ' ),
		'id'   => $prefix . 'A_RAE',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Karotenoidit', 'karotenoidit' ),
		'id'   => $prefix . 'karotenoidit',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'D-vitamiini', 'cmb2' ),
		'id'   => $prefix . 'D',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'E-vitamiini alfatokoferoli', 'cmb2' ),
		'id'   => $prefix . 'E',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'K-vitamiini', 'cmb2' ),
		'id'   => $prefix . 'K',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Kalsium', 'cmb2' ),
		'id'   => $prefix . 'kalsium',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Rauta', 'cmb2' ),
		'id'   => $prefix . 'rauta',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Jodidi', 'cmb2' ),
		'id'   => $prefix . 'jodidi',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Kalium', 'cmb2' ),
		'id'   => $prefix . 'kalium',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Magnesium', 'cmb2' ),
		'id'   => $prefix . 'magnesium',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Natrium', 'cmb2' ),
		'id'   => $prefix . 'natrium',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Suola', 'cmb2' ),
		'id'   => $prefix . 'suola',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Fosfori', 'cmb2' ),
		'id'   => $prefix . 'fosfori',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Seleeni', 'cmb2' ),
		'id'   => $prefix . 'seleeni',
		'type' => 'text_small',
		'desc' => 'µg'
	) );

	$cmb_food->add_field( array(
		'name' => esc_html__( 'Sinkki', 'cmb2' ),
		'id'   => $prefix . 'sinkki',
		'type' => 'text_small',
		'desc' => 'mg'
	) );

}

add_action( 'cmb2_admin_init', 'ir_register_food_metabox' );

/**
 * Add metaboxes for single-post
 */
function ir_register_post_metabox() {
	$prefix = 'ir_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_post = new_cmb2_box( array(
		'id'           => $prefix . 'post_metabox',
		'title'        => esc_html__( 'Material data', 'cmb2' ),
		'object_types' => array( 'post' ),
	) );
	// Add new field
	$cmb_post->add_field( array(
		'name'            => __( 'Liittyvä raaka-aine', 'cmb2' ),
		'id'              => $prefix . 'related_food',
		'desc'            => __( 'Klikkaa hakuikonia tai syötä kenttään suoraan raaka-aineen id', 'cmb2' ),
		'type'            => 'post_search_text', // This field type
		// post type also as array
		'post_type'       => 'food',
		// Default is 'checkbox', used in the modal view to select the post type
		'select_type'     => 'radio',
		// Will replace any selection with selection from modal. Default is 'add'
		'select_behavior' => 'replace',
	) );
	$cmb_post->add_field( array(
		'name' => 'Näytettävät ravintoarvot?',
		'type' => 'title',
		'id'   => $prefix . 'nutrients_title',
	) );
	$cmb_post->add_field( array(
		'name'    => 'Perusravintoaineet',
		'id'      => $prefix . 'perusravintoaineet',
		'type'    => 'multicheck',
		'desc'    => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options' => array(
			$prefix . 'energy'         => __( 'Energia, laskennallinen', 'cmb2' ),
			$prefix . 'hiilihydraatti' => __( 'Hiilihydraatti', 'cmb2' ),
			$prefix . 'proteiini'      => __( 'Proteiini', 'cmb2' ),
			$prefix . 'rasva'          => __( 'Rasva', 'cmb2' ),
		),
	) );
	$cmb_post->add_field( array(
		'name'    => 'Hiilihydraattifraktiot',
		'id'      => $prefix . 'hiilihydraattifraktiot',
		'type'    => 'multicheck',
		'desc'    => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options' => array(
			$prefix . 'sokeri' => __( 'Kuitu', 'cmb2' ),
			$prefix . 'kuitu'  => __( 'Sokerit', 'cmb2' ),
		),
	) );
	$cmb_post->add_field( array(
		'name'    => 'Vitamiinit',
		'id'      => $prefix . 'vitamiinit',
		'type'    => 'multicheck',
		'desc'    => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options' => array(
			$prefix . 'folaatti'             => __( 'Folaatti', 'cmb2' ),
			$prefix . 'niasiiniekvivalentti' => __( 'Niasiiniekvivalentti NE', 'cmb2' ),
			$prefix . 'niasiini'             => __( 'Niasiini (nikotiinihappo + nikotiiniamidi)', 'cmb2' ),
			$prefix . 'b6'                   => __( 'Pyridoksiini vitameerit (vetykloridi) (B6)', 'cmb2' ),
			$prefix . 'b2'                   => __( 'Riboflaviini (B2)', 'cmb2' ),
			$prefix . 'b1'                   => __( 'Tiamiini (B1)', 'cmb2' ),
			$prefix . 'b12'                  => __( 'B12-vitamiini (kobalamiini)', 'cmb2 ' ),
			$prefix . 'C'                    => __( 'C-vitamiini', 'cmb2' ),
			$prefix . 'A_RAE'                => __( 'A-vitamiini', 'vitamiini ' ),
			$prefix . 'karotenoidit'         => __( 'Karotenoidit', 'karotenoidit' ),
			$prefix . 'D'                    => __( 'D-vitamiini', 'cmb2' ),
			$prefix . 'E'                    => __( 'E-vitamiini alfatokoferoli', 'cmb2' ),
			$prefix . 'K'                    => __( 'K-vitamiini', 'cmb2' ),
		),
	) );
	$cmb_post->add_field( array(
		'name'    => 'Kivennäis- ja hivenaineet',
		'id'      => $prefix . 'kivennaisaineet',
		'type'    => 'multicheck',
		'desc'    => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options' => array(
			$prefix . 'kalsium'   => __( 'Kalsium', 'cmb2' ),
			$prefix . 'rauta'     => __( 'Rauta', 'cmb2' ),
			$prefix . 'jodidi'    => __( 'Jodidi', 'cmb2' ),
			$prefix . 'kalium'    => __( 'Kalium', 'cmb2' ),
			$prefix . 'magnesium' => __( 'Magnesium', 'cmb2' ),
			$prefix . 'natrium'   => __( 'Natrium', 'cmb2' ),
			$prefix . 'suola'     => __( 'Suola', 'cmb2' ),
			$prefix . 'fosfori'   => __( 'Fosfori', 'cmb2' ),
			$prefix . 'seleeni'   => __( 'Seleeni', 'cmb2' ),
			$prefix . 'sinkki'    => __( 'Sinkki', 'cmb2' ),
		),
	) );
}

add_action( 'cmb2_admin_init', 'ir_register_post_metabox' );


