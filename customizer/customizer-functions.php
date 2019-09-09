<?php
function oel_color_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting( $setting_name ,
								array(
									    "capability" => "edit_posts",
									    "default" => get_theme_mod($setting_name, "#000000" ),
									    'sanitize_callback' => 'sanitize_hex_color',
									)
								);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
															$id_control,
															array(
																	'label'      => $label,
																	'section'    =>  $section,
																	'settings'   =>  $setting_name
																)
															)
								);
}


function oel_taille_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting( $setting_name,
								array(
									    "capability" => "edit_posts",
									    "default" => get_theme_mod($setting_name, "" )
									)
								);




	$wp_customize->add_control( $setting_name,
								array(
									'label'    => __($label . "(entrez des valeurs en px, em ou %)"),
									'section'  => $section,
									'settings' => $setting_name,
									'type'     => 'text',
									)
								);
}



function oel_polices_titres($wp_customize, $section, $setting_name, $id_control, $label)
{

	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label,
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															"défaut" => "",
															"Euphoria" => "Euphoria",
															"Raleway" => "Raleway",
															"Dancing Script" => "Dancing Script"
														)
									)

								);
}



function oel_polices_texte($wp_customize, $section, $setting_name, $id_control, $label)
{

	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label,
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															"défaut" 			 => "",
															"Open Sans"  => "Open Sans",
															"Roboto" 	 => "Roboto",
															"Gayathri" 	 => "Gayathri",
															"Lato" 		 => "Lato",
															"Montserrat" => "Montserrat"
														)
									)
								);
}


function oel_graisse_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label . "(attention certaines polices n' ont pas ces capacités)",
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															"100"        => "100",
															"200"        => "200",
															"300"        => "300",
															"400"        => "400",
															"500"        => "500",
															"600"        => "600",
															"700"        => "700",
														)
									)

								);
}





function oel_style_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label . "(attention certaines polices n' ont pas ces capacités)",
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															""        => "",
															"Italic"  => "Italic",
															"Regular" => "Regular",
														)
									)

								);
}



function oel_transformation_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label,
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															"" => "",
															"capitalize" => "capitalize",
															"uppercase" => "uppercase",
															"lowercase" => "lowercase",
														)
									)

								);
}


function oel_text_decoration_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label,
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															""             => "",
															"underline"    => "underline",
															"overline" 	   => "overline",
															"line-through" => "line-through",
														)
									)

								);
}




function oel_hauteur_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting( $setting_name ,
								array(
									   "default" => get_theme_mod($setting_name, "" ),
									    //'sanitize_callback' => 'sanitize_hex_color',
									)
								);




	$wp_customize->add_control($id_control,
								array(
									'label'    => __( $label, 'ombres-et-lumieres' ),
									'section'  =>$section,
									'settings' => $setting_name,
									'type'     => 'number',
									)
								);
}


function oel_text_align_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label,
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															"" 		  => "",
															"left" 	  => "left",
															"right"   => "right",
															"center"  => "center",
															"justify" => "justify"
														)
									)

								);
}

function oel_text_decoration_style_setting($wp_customize, $section, $setting_name, $id_control, $label)
{
	$wp_customize->add_setting($setting_name,
								array(
										"capability" => "edit_posts",
										'default'	=>	get_theme_mod($setting_name, ""),
									)
								);





	$wp_customize->add_control($id_control,
								array(
										"label" => $label,
										"section" => $section,
										"settings" => $setting_name,
										"type" => "select",
										"choices"=> array(
															""             => "",
															"solid"  => "solid",
															"double" => "double",
															"dotted" => "dotted",
															"dashed" => "dashed",
															"wavy"   => "wavy"
														)
									)

								);
}




?>