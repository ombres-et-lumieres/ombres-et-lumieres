<?php
function oetl_wp_lr($wp_customize)
{

	$sections = ["galerie", "figure", "figcaption"];

	foreach($sections as $section)
	{
		$wp_customize->add_section( $section,
		                           array(
		                               'panel' => 'wp_lr_sync',
		                               'title' =>  __($section, "ombres-et-lumieres") ,
		                               'priority' => 20,
		                               'capability' => 'edit_theme_options',
		                               "description" => "mise en page du bloc galerie du plugin wp/lr",
		                           )
		                         );

		oel_color_setting($wp_customize, $section, "oetl_setting_color_" . $section, "oetl_control_color_" . $section, "choisissez la couleur de fond de " . $section);

		oel_size_setting($wp_customize, $section, "oetl_setting_margin_" . $section, "oetl_control_margin_" . $section, "margin_size", "choisissez la taille de la marge de " . $section);

		oel_size_setting($wp_customize, $section, "oetl_setting_padding_" . $section, "oetl_control_padding_" . $section, "margin_size", "choisissez la taille du padding de " . $section);

		oel_size_setting($wp_customize, $section, "oetl_setting_border_width_" . $section, "oetl_control_border_width_" . $section, "border_size", "choisissez la taille de la bordure de " . $section);

		oel_color_setting($wp_customize, $section, "oetl_setting_border_color_" . $section, "oetl_control_border_color_" . $section, "choisissez la couleur de la bordure de " . $section);




	}





















}
add_action( 'customize_register' ,"oetl_wp_lr" );


?>