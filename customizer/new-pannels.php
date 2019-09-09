<?php

/* 	ajout des panneaux:
	design home
	photo design
	archive page design
	custom taxo page design
	wp page design */

function oetl_pannels_register($wp_customize)
{

	/* je crée de nouveaux panneaux pour regrouper les éléments de design  */
	$wp_customize->add_panel( 'typographie', array
											(
											    'priority'       => 1,
											    'capability'     => 'edit_theme_options',
											    'theme_supports' => '',
											    'title'          => 'typographie',
											    'description'    => 'mise en page générale',
											)
							);








}
add_action( 'customize_register' ,"oetl_pannels_register" );



















?>