<?php
$post_id = get_the_ID();

$related_food_id = get_post_meta( $post_id, 'ir_related_food', true );

// Bail early, if no related food is set
if ( ! $related_food_id ) {
	return;
}

$finnish_names = array(
	'ir_energy'               => __( 'Energia', 'cmb2' ),
	'ir_hiilihydraatti'       => __( 'Hiilihydraatti', 'cmb2' ),
	'ir_proteiini'            => __( 'Proteiini', 'cmb2' ),
	'ir_rasva'                => __( 'Rasva', 'cmb2' ),
	'ir_sokeri'               => __( 'Kuitu', 'cmb2' ),
	'ir_kuitu'                => __( 'Sokerit', 'cmb2' ),
	'ir_folaatti'             => __( 'Folaatti', 'cmb2' ),
	'ir_niasiiniekvivalentti' => __( 'Niasiiniekvivalentti', 'cmb2' ),
	'ir_niasiini'             => __( 'Niasiini', 'cmb2' ),
	'ir_b6'                   => __( 'B6-vitamiini', 'cmb2' ),
	'ir_b2'                   => __( 'B2-vitamiini', 'cmb2' ),
	'ir_b1'                   => __( 'B1-vitamiini', 'cmb2' ),
	'ir_b12'                  => __( 'B12-vitamiini', 'cmb2 ' ),
	'ir_C'                    => __( 'C-vitamiini', 'cmb2' ),
	'ir_A_RAE'                => __( 'A-vitamiini', 'vitamiini ' ),
	'ir_karotenoidit'         => __( 'Karotenoidit', 'karotenoidit' ),
	'ir_D'                    => __( 'D-vitamiini', 'cmb2' ),
	'ir_E'                    => __( 'E-vitamiini', 'cmb2' ),
	'ir_K'                    => __( 'K-vitamiini', 'cmb2' ),
	'ir_kalsium'              => __( 'Kalsium', 'cmb2' ),
	'ir_rauta'                => __( 'Rauta', 'cmb2' ),
	'ir_jodidi'               => __( 'Jodidi', 'cmb2' ),
	'ir_kalium'               => __( 'Kalium', 'cmb2' ),
	'ir_magnesium'            => __( 'Magnesium', 'cmb2' ),
	'ir_natrium'              => __( 'Natrium', 'cmb2' ),
	'ir_suola'                => __( 'Suola', 'cmb2' ),
	'ir_fosfori'              => __( 'Fosfori', 'cmb2' ),
	'ir_seleeni'              => __( 'Seleeni', 'cmb2' ),
	'ir_sinkki'               => __( 'Sinkki', 'cmb2' ),
);

echo '<h2 class="nutrients__title">Ravintoaineet</h2>';

$perusravintoaineet = get_post_meta( $post_id, 'ir_perusravintoaineet', true ); //array
echo ( is_array( $perusravintoaineet ) ) ? \App\outputNutrients( $perusravintoaineet, $finnish_names, $related_food_id ) : '';

$hiilihydraattifraktiot = get_post_meta( $post_id, 'ir_hiilihydraattifraktiot', true ); //array
echo ( is_array( $hiilihydraattifraktiot ) ) ? \App\outputNutrients( $hiilihydraattifraktiot, $finnish_names, $related_food_id ) : '';

$vitamiinit = get_post_meta( $post_id, 'ir_vitamiinit', true ); //array
echo ( is_array( $vitamiinit ) ) ? \App\outputNutrients( $vitamiinit, $finnish_names, $related_food_id ) : '';

$kivennaisaineet = get_post_meta( $post_id, 'ir_kivennaisaineet', true ); //array
echo ( is_array( $kivennaisaineet ) ) ? \App\outputNutrients( $kivennaisaineet, $finnish_names, $related_food_id ) : '';

echo '<small class="text-muted">Lähde: <a href="www.fineli.fi" class="text-muted" target="_blank">Fineli</a></small>';