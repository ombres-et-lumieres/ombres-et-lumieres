<?php
function oetl_polices_textes($type)
{
	$titres =  array(
					"" => "défaut",
					"Euphoria" => "Euphoria",
					"Raleway" => "Raleway",
					"Dancing Script" => "Dancing Script"
				);
	$textes = array(
					"" 			 => "défaut",
					"Open Sans"  => "Open Sans",
					"Roboto" 	 => "Roboto",
					"Gayathri" 	 => "Gayathri",
					"Lato" 		 => "Lato",
					"Montserrat" => "Montserrat"
				);

	if("titres" ==$type)
	{
		return $titres;
	}
	else return $textes;
}

function oetl_font_sizes_types($size_type)
{
	$em = array(
		        'min'   => 1,
		        'max'   => 4,
		        'step'  => 0.1,
		    );

	$font_size_pourcent = array(
			        'min'   => 50,
			        'max'   => 150,
			        'step'  => 1,
			    );

	$border_size_pourcent = array(
			        'min'   => 0,
			        'max'   => 10,
			        'step'  => 1,
			    );

	$margin_size = array(
			        'min'   => 0,
			        'max'   => 25,
			        'step'  => 1,
			    );

	switch($size_type)
		{
			case "em": return $em;
						break;

			case "font_size_pourcent": return $font_size_pourcent;
						break;

			case "border_size": return $border_size_pourcent;
						break;

			case "margin_size": return $margin_size;
						break;
		}
}



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


function oel_size_setting($wp_customize, $section, $setting_name, $id_control, $size_type, $label)
{
	$wp_customize->add_setting( $setting_name,
								array(
									    "capability" => "edit_posts",
									    "default" => get_theme_mod($setting_name, "" )
									)
								);




	$wp_customize->add_control( $setting_name,
								array(
									'label'    => __($label, "ombres-et-lumieres"),
									'section'  => $section,
									'settings' => $setting_name,
									'type'     => 'number',
									'input_attrs' => oetl_font_sizes_types($size_type)
									)
								);
}



function oel_font_family($wp_customize, $section, $setting_name, $id_control, $type, $label)
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
										"choices"=> oetl_polices_textes($type)
									)
								);
}



function oel_font_weight_setting($wp_customize, $section, $setting_name, $id_control, $label)
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
															""           => "défaut",
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





function oel_font_style_setting($wp_customize, $section, $setting_name, $id_control, $label)
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
															""        => "défaut",
															"Italic"  => "Italic",
															"normal" => "normal",
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
															"" => "défaut",
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
															""             => "défaut",
															"underline"    => "underline",
															"overline" 	   => "overline",
															"line-through" => "line-through",
														)
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
															""  	  => "défaut",
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
															""       => "défaut",
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