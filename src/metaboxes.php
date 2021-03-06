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
 * Manually render a field column display.
 *
 * @param  array $field_args Array of field arguments.
 * @param  CMB2_Field $field The field object
 */
function yourprefix_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo $field->row_classes(); ?>">
		<p><?php echo $field->escaped_value(); ?></p>
		<p class="description"><?php echo $field->args( 'description' ); ?></p>
	</div>
	<?php
}

/**
 * Add metaboxes for single-post
 */
function ir_register_post_metabox() {
	global $post;
	$related_food_id = 0;
	if ( isset( $_GET['post'] ) ) {
		$related_food_id = get_post_meta( $_GET['post'], 'ir_related_food', true );
	}
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
			$prefix . 'energy'         => __( 'Energia, laskennallinen', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_energy' ),
			$prefix . 'hiilihydraatti' => __( 'Hiilihydraatti', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_hiilihydraatti' ),
			$prefix . 'proteiini'      => __( 'Proteiini', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_proteiini' ),
			$prefix . 'rasva'          => __( 'Rasva', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_rasva' ),
		),
	) );
	$cmb_post->add_field( array(
		'name'    => 'Hiilihydraattifraktiot',
		'id'      => $prefix . 'hiilihydraattifraktiot',
		'type'    => 'multicheck',
		'desc'    => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options' => array(
			$prefix . 'sokeri' => __( 'Kuitu', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_sokeri' ),
			$prefix . 'kuitu'  => __( 'Sokerit', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_kuitu' ),
		),
	) );
	$cmb_post->add_field( array(
		'name'       => 'Vitamiinit',
		'id'         => $prefix . 'vitamiinit',
		'type'       => 'multicheck',
		'desc'       => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options'    => array(
			$prefix . 'folaatti'             => __( 'Folaatti', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_folaatti' ),
			$prefix . 'niasiiniekvivalentti' => __( 'Niasiiniekvivalentti NE', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_niasiiniekvivalentti' ),
			$prefix . 'niasiini'             => __( 'Niasiini (nikotiinihappo + nikotiiniamidi)', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_niasiini' ),
			$prefix . 'b6'                   => __( 'Pyridoksiini vitameerit (vetykloridi) (B6)', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_b6' ),
			$prefix . 'b2'                   => __( 'Riboflaviini (B2)', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_b2' ),
			$prefix . 'b1'                   => __( 'Tiamiini (B1)', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_b1' ),
			$prefix . 'b12'                  => __( 'B12-vitamiini (kobalamiini)', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_b12' ),
			$prefix . 'C'                    => __( 'C-vitamiini', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_C' ),
			$prefix . 'A_RAE'                => __( 'A-vitamiini', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_A_RAE' ),
			$prefix . 'karotenoidit'         => __( 'Karotenoidit', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_karotenoidit' ),
			$prefix . 'D'                    => __( 'D-vitamiini', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_D' ),
			$prefix . 'E'                    => __( 'E-vitamiini alfatokoferoli', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_E' ),
			$prefix . 'K'                    => __( 'K-vitamiini', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_K' ),
		),
		'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );
	$cmb_post->add_field( array(
		'name'    => 'Kivennäis- ja hivenaineet',
		'id'      => $prefix . 'kivennaisaineet',
		'type'    => 'multicheck',
		'desc'    => 'Valitse mitkä ravintoarvot haluat näyttää kirjoituksen yhteydessä',
		'options' => array(
			$prefix . 'kalsium'   => __( 'Kalsium', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_kalsium' ),
			$prefix . 'rauta'     => __( 'Rauta', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_rauta' ),
			$prefix . 'jodidi'    => __( 'Jodidi', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_jodidi' ),
			$prefix . 'kalium'    => __( 'Kalium', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_kalium' ),
			$prefix . 'magnesium' => __( 'Magnesium', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_magnesium' ),
			$prefix . 'natrium'   => __( 'Natrium', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_natrium' ),
			$prefix . 'suola'     => __( 'Suola', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_suola' ),
			$prefix . 'fosfori'   => __( 'Fosfori', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_fosfori' ),
			$prefix . 'seleeni'   => __( 'Seleeni', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_seleeni' ),
			$prefix . 'sinkki'    => __( 'Sinkki', 'cmb2' ) . \App\get_value_and_unit( $related_food_id, 'ir_sinkki' ),
		),
	) );
}

add_action( 'cmb2_admin_init', 'ir_register_post_metabox' );


