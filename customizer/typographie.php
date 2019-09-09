<?php
function oetl_typographie($wp_customize)
{

	$wp_customize->add_section( "couleur_page",
		                       array(
		                           'panel' => 'typographie',
		                           'title' =>  __("couleur de la page", "ombres-et-lumieres") ,
		                           'priority' => 20,
		                           'capability' => 'edit_theme_options',
		                           "description" =>  __("couleur de l' arrière plan", "ombres-et-lumieres" ),
		                       )
		                  );


	oel_color_setting($wp_customize, "couleur_page", "setting_couleur_page", "control_couleur_page", "choisissez la couleur de l' arrière plan de la page");





	$sections = ["H1", "H2", "H3", "texte", "lien"];

	foreach ($sections as $section)
		{
			$wp_customize->add_section( $section,
		                           array(
		                               'panel' => 'typographie',
		                               'title' =>  __($section, "ombres-et-lumieres") ,
		                               'priority' => 20,
		                               'capability' => 'edit_theme_options',
		                               "description" =>  __("polices, tailles graisses et hauteur de ligne de l' élément " . $section, "ombres-et-lumieres" ),
		                           )
		                      );

			$Hn = ["H1", "H2", "H3"];


			if (in_array($section, $Hn))
			{
				oel_polices_titres($wp_customize, $section, "setting_police_" . $section, "control_police_" . $section, "Choisissez la police de caractère pour le titre " . $section);

				oel_text_decoration_setting($wp_customize, $section, "setting_decoration_" . $section, "control_decoration_" . $section, "Choisissez la décoration pour le titre " . $section);

				oel_text_align_setting($wp_customize, $section, "setting_align_" . $section, "control_align_" . $section, "Choisissez l' alignement pour le titre " . $section);

				oel_text_decoration_style_setting($wp_customize, $section, "setting_decoration_style_" . $section, "control_text_decoration_" . $section, "Choisissez le style de décoration pour le titre " . $section);

				oel_color_setting($wp_customize, $section, "setting_couleur_" . $section, "control_couleur_" . $section, "choisissez la couleur de " . $section);
			}



			if ($section == "texte")
			{
				oel_polices_texte($wp_customize, $section, "setting_police_p", "control_police_p", "Choisissez la police de caractère pour le paragraphe");

				oel_text_align_setting($wp_customize, $section,  "setting_align_p", "control_align_p", "Choisissez l' alignement pour le paragraphe");

				oel_color_setting($wp_customize, $section, "setting_couleur_p", "control_couleur_p", "choisissez la couleur du texte du paragraphe");

				oel_taille_setting($wp_customize, $section, "setting_taille_p", "control_taille_p", "choisissez la taille de caractère du paragraphe");

				oel_graisse_setting($wp_customize, $section, "setting_graisse_p", "control_graisse_p", "choisissez la graisse du caractère du paragraphe ");

				oel_style_setting($wp_customize, $section, "setting_style_p", "control_style_p", "choisissez le style du paragraphe" );
			}


			if ($section != ("lien" and "texte"))
			{
			  //	if($section == "texte") {$section = "p";};

				oel_taille_setting($wp_customize, $section, "setting_taille_" . $section, "control_taille_" .$section, "choisissez la taille de " . $section);


				oel_graisse_setting($wp_customize, $section, "setting_graisse_" . $section, "control_graisse_" .$section, "choisissez la graisse de " . $section);



				oel_style_setting($wp_customize, $section, "setting_style_" . $section, "control_style_" . $section, "choisissez le style de " . $section);



				oel_transformation_setting($wp_customize, $section, "setting_transfo_" . $section, "control_transfo_" . $section, "choisissez la transformation de " . $section);



				oel_hauteur_setting($wp_customize, $section, "setting_hauteur_" . $section, "control_hauteur_" . $section, "choisissez la hauteur de ligne " . $section);

			}

			else
				{
					$liens = ["normal", "hover", "visited"];

					foreach ($liens as $lien)
						{
							oel_color_setting($wp_customize, $section, "setting_couleur_a:" . $lien, "control_couleur_a:" . $lien, "choisissez la couleur du lien " . $lien);
						}



				}
		}
}
add_action( 'customize_register' ,"oetl_typographie" );






?>