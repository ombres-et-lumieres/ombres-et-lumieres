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


	if (is_plugin_active('wplr-sync/wplr-sync.php'))
	{
		$wp_customize->add_panel( 'wp_lr_sync', array
										(
										    'priority'       => 1,
										    'capability'     => 'edit_theme_options',
										    'theme_supports' => '',
										    'title'          => 'galerie de wp/lr',
										    'description'    => 'mise en page de la galerie de wp/lr',
										)
						);
	}





}
add_action( 'customize_register' ,"oetl_pannels_register" );



















?>