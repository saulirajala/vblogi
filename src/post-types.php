<?php
// Register Custom Food
function ir_register_custom_post_types() {

	$labels = array(
		'name'                  => _x( 'Foods', 'Food General Name', 'text_domain' ),
		'singular_name'         => _x( 'Food', 'Food Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Foods', 'text_domain' ),
		'name_admin_bar'        => __( 'Food', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args   = array(
		'label'               => __( 'Food', 'text_domain' ),
		'description'         => __( 'Food Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'food', $args );

}

add_action( 'init', 'ir_register_custom_post_types', 0 );


/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function yourprefix_register_demo_metabox() {
	$prefix = 'ir_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Component values', 'cmb2' ),
		'object_types' => array( 'food', ), // Post type
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'energia, laskennallinen', 'cmb2' ),
		'id'   => $prefix . 'energy',
		'type' => 'text_small',
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Food id', 'cmb2' ),
		'id'   => $prefix . 'foodId',
		'type' => 'text_small',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Hiilihydraatti', 'cmb2' ),
		'id'   => $prefix . 'hiilihydraatti',
		'type' => 'text_small',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Proteiini', 'cmb2' ),
		'id'   => $prefix . 'proteiini',
		'type' => 'text_small',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Rasva', 'cmb2' ),
		'id'   => $prefix . 'rasva',
		'type' => 'text_small',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Sokeri', 'cmb2' ),
		'id'   => $prefix . 'sokeri',
		'type' => 'text_small',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Folaatti', 'cmb2' ),
		'id'   => $prefix . 'folaatti',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Niasiiniekvivalentti NE', 'cmb2' ),
		'id'   => $prefix . 'niasiiniekvivalentti',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Niasiini (nikotiinihappo + nikotiiniamidi)', 'cmb2' ),
		'id'   => $prefix . 'niasiini',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Pyridoksiini vitameerit (vetykloridi) (B6)', 'cmb2' ),
		'id'   => $prefix . 'b6',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Riboflaviini (B2)', 'cmb2' ),
		'id'   => $prefix . 'b2',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Tiamiini (B1)', 'cmb2' ),
		'id'   => $prefix . 'b1',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'B12-vitamiini (kobalamiini)', 'cmb2 ' ),
		'id'   => $prefix . 'b12',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'C-vitamiini', 'cmb2' ),
		'id'   => $prefix . 'C',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'A-vitamiini', 'vitamiini ' ),
		'id'   => $prefix . 'A_RAE',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Karotenoidit', 'karotenoidit' ),
		'id'   => $prefix . 'karotenoidit',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'D-vitamiini', 'cmb2' ),
		'id'   => $prefix . 'D',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'E-vitamiini alfatokoferoli', 'cmb2' ),
		'id'   => $prefix . 'E',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'K-vitamiini', 'cmb2' ),
		'id'   => $prefix . 'K',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Kalsium', 'cmb2' ),
		'id'   => $prefix . 'kalsium',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Rauta', 'cmb2' ),
		'id'   => $prefix . 'rauta',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Jodidi', 'cmb2' ),
		'id'   => $prefix . 'jodidi',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Kalium', 'cmb2' ),
		'id'   => $prefix . 'kalium',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Magnesium', 'cmb2' ),
		'id'   => $prefix . 'magnesium',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Natrium', 'cmb2' ),
		'id'   => $prefix . 'natrium',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Suola', 'cmb2' ),
		'id'   => $prefix . 'suola',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Fosfori', 'cmb2' ),
		'id'   => $prefix . 'fosfori',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Seleeni', 'cmb2' ),
		'id'   => $prefix . 'seleeni',
		'type' => 'text_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Sinkki', 'cmb2' ),
		'id'   => $prefix . 'sinkki',
		'type' => 'text_small',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Kuitu', 'cmb2' ),
		'id'   => $prefix . 'kuitu',
		'type' => 'text_small',
	) );


}

add_action( 'cmb2_admin_init', 'yourprefix_register_demo_metabox' );

