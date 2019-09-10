<?php
function oetl_typographie($wp_customize)
{

	$wp_customize->add_section("texte" ,
		                       array(
		                           'panel' => 'typographie',
		                           'title' =>  __("typographie générale de la page", "ombres-et-lumieres") ,
		                           'priority' => 20,
		                           'capability' => 'edit_theme_options',
		                           "description" =>  __("valeurs générales pour la police de caractère, sa couleur, sa taille,...", "ombres-et-lumieres" ),
		                       )
		                  );



	oel_polices_texte($wp_customize, "texte", "setting_police_texte", "control_police_texte", "Choisissez la police de caractère du texte de la page");

	oel_text_align_setting($wp_customize, "texte",  "setting_align_texte", "control_align_texte", "Choisissez l' alignement du texte de la page");

	oel_taille_setting_px($wp_customize, "texte", "setting_taille_texte", "control_taille_texte", "choisissez la taille de caractère du texte de la page (en px)");

	oel_taille_setting($wp_customize, "texte", "setting_hauteur_ligne", "control_hauteur_ligne", "choisissez la hauteur de ligne du texte de la page");

	oel_graisse_setting($wp_customize, "texte", "setting_graisse_texte", "control_graisse_texte", "choisissez la graisse du caractère du texte de la page");

	oel_style_setting($wp_customize, "texte", "setting_style_texte", "control_style_texte", "choisissez le style du texte de la page" );

	oel_color_setting($wp_customize, "texte", "setting_couleur_texte", "control_couleur_texte", "choisissez la couleur du texte de la page");

	oel_color_setting($wp_customize, "texte", "setting_couleur_page", "control_couleur_page", "choisissez la couleur de l' arrière plan de la page");





	$sections = ["H1", "H2", "H3", "lien"];

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


				oel_taille_setting($wp_customize, $section, "setting_taille_" . $section, "control_taille_" .$section, "choisissez la taille de " . $section . "(en em)");


				oel_graisse_setting($wp_customize, $section, "setting_graisse_" . $section, "control_graisse_" .$section, "choisissez la graisse de " . $section);



				oel_style_setting($wp_customize, $section, "setting_style_" . $section, "control_style_" . $section, "choisissez le style de " . $section);



				oel_transformation_setting($wp_customize, $section, "setting_transfo_" . $section, "control_transfo_" . $section, "choisissez la transformation de " . $section);



				oel_taille_setting($wp_customize, $section, "setting_hauteur_" . $section, "control_hauteur_" . $section, "choisissez la hauteur de ligne " . $section);

			}

			else
				{
					$liens = ["a", "a:hover", "a:visited"];

					foreach ($liens as $lien)
						{
							oel_color_setting($wp_customize, $section, "setting_couleur_" . $lien, "control_couleur_" . $lien, "choisissez la couleur du lien " . $lien);
						}



				}
		}


	$wp_customize->add_section("article",
		                       array(
		                           'panel' => 'typographie',
		                           'title' =>  __("typographie pour les articles", "ombres-et-lumieres") ,
		                           'priority' => 20,
		                           'capability' => 'edit_theme_options',
		                           "description" =>  __("valeurs générales pour la police de caractère, sa couleur, sa taille,...", "ombres-et-lumieres" ),
		                       )
		                  );



	oel_polices_texte($wp_customize, "article", "setting_police_article", "control_police_article", "Choisissez la police de caractère du texte de la page");

	oel_text_align_setting($wp_customize, "article",  "setting_align_article", "control_align_article", "Choisissez l' alignement du texte de la page");

	oel_taille_setting($wp_customize, "article", "setting_taille_police_article", "control_taille_texte_article", "choisissez la taille de caractère du texte de la page (en em)");

	oel_taille_setting($wp_customize, "article", "setting_taille_police_article_H1", "control_taille_texte_article_H1", "choisissez la taille de caractère du H1 de la page (en em)");

	oel_taille_setting($wp_customize, "article", "setting_taille_police_article_H2", "control_taille_texte_article_H2", "choisissez la taille de caractère du H2 de la page (en em)");

	oel_taille_setting($wp_customize, "article", "setting_taille_police_article_H3", "control_taille_texte_article_H3", "choisissez la taille de caractère du H3 de la page (en em)");

	oel_taille_setting($wp_customize, "article", "setting_hauteur_ligne_article", "control_hauteur_ligne_article", "choisissez la hauteur de ligne du texte de la page");

	oel_graisse_setting($wp_customize, "article", "setting_graisse_texte_article", "control_graisse_texte_article", "choisissez la graisse du caractère du texte de la page");













}
add_action( 'customize_register' ,"oetl_typographie" );






?>