<?php
function oetl_typographie($wp_customize)
{

	$sections = ["page", "H1", "H2", "H3", "liens", "article"];

	$els_htmls = ["page", "H1", "H2", "H3"];

	$Hns = ["H1", "H2", "H3"];

	foreach ($sections as $section)
		{
			if ("page" == $section)
				{
					$description = __("polices, tailles graisses et hauteur de ligne de la page (niveau de la balise body)", "ombres-et-lumieres" );
				}


			if (in_array($section, $Hns))
				{
					$description =  __("polices, tailles graisses et hauteur de ligne de l' élément " . $section . "(niveau de la balise body)", "ombres-et-lumieres" );
				}



			if ("liens" == $section)
				{
					$description = __("couleurs des liens normaux, visités et survolés", "ombres-et-lumieres" );
				}


			if ("article" == $section)
				{
					$description = __("polices, tailles graisses et hauteur de ligne pour les éléments d' un article", "ombres-et-lumieres" );
				}




			$wp_customize->add_section( $section,
			                           array(
			                               'panel' => 'typographie',
			                               'title' =>  __($section, "ombres-et-lumieres") ,
			                               'priority' => 20,
			                               'capability' => 'edit_theme_options',
			                               "description" => $description,
			                           )
			                         );




	        if ("page" == $section)
	          {
				oel_font_family($wp_customize, "page", "setting_police_page", "control_police_page", "Choisissez la police de caractère du texte de la page");

				oel_font_weight_setting($wp_customize, $section, "setting_graisse_page", "control_graisse_texte_article", "choisissez la graisse du caractère du texte de l' article");

				oel_size_setting_px($wp_customize, "page", "setting_font_size_page", "control_taille_page", "choisissez la taille de caractère du texte de la page (en px)");

				oel_font_style_setting($wp_customize, $section, "setting_font_style_page", "control_font_style_page", "Choisissez le style de police");

				oel_size_setting($wp_customize, $section, "setting_hauteur_ligne_page", "control_hauteur_ligne_article", "choisissez la hauteur de ligne du texte de l' article");

				oel_text_align_setting($wp_customize, $section,  "setting_align_page", "control_align_page", "Choisissez l' alignement du texte de la page");

				oel_color_setting($wp_customize, "page", "setting_couleur_page", "control_couleur_page", "choisissez la couleur du texte de la page");

				oel_color_setting($wp_customize, "page", "setting_background_page", "control_background_page", "choisissez la couleur du fond de la page");
	          }

            if (in_array($section, $Hns))
      		 {
          		oel_font_family_Hn($wp_customize, $section, "setting_police_" . $section, "control_police_" . $section, "Choisissez la police de caractère pour le titre " . $section);

          		oel_text_decoration_setting($wp_customize, $section, "setting_decoration_" . $section, "control_decoration_" . $section, "Choisissez la décoration pour le titre " . $section);

				oel_text_align_setting($wp_customize, $section, "setting_align_" . $section, "control_align_" . $section, "Choisissez l' alignement pour le titre " . $section);

				oel_text_decoration_style_setting($wp_customize, $section, "setting_decoration_style_" . $section, "control_text_decoration_" . $section, "Choisissez le style de décoration pour le titre " . $section);

				oel_color_setting($wp_customize, $section, "setting_couleur_" . $section, "control_couleur_" . $section, "choisissez la couleur de " . $section);

				oel_size_setting($wp_customize, $section, "setting_taille_" . $section, "control_taille_" .$section, "choisissez la taille de " . $section . "(en em)");
      		 }



			if ("liens" == $section)
				{
					$liens = ["a", "a:hover", "a:visited"];

					foreach ($liens as $lien)
						{
							oel_color_setting($wp_customize, $section, "setting_couleur_" . $lien, "control_couleur_" . $lien, "choisissez la couleur du lien " . $lien);
						}
				}


		  if ("article" == $section)
		  	{
		  		oel_font_family($wp_customize, "article", "setting_police_article", "control_police_article", "Choisissez la police de caractère du texte de l' article");

		  		oel_font_style_setting($wp_customize, $section, "setting_font_style_article", "control_font_style_article", "Choisissez le style de police");


				oel_text_align_setting($wp_customize, $section,  "setting_align_article", "control_align_article", "Choisissez l' alignement du texte de la page");

				oel_size_setting($wp_customize, $section, "setting_font_size_article", "control_taille_texte_article", "choisissez la taille de caractère du texte de l' article (en em)");

				oel_size_setting($wp_customize, $section, "setting_line_height_article", "control_hauteur_ligne_article", "choisissez la hauteur de ligne du texte de l' article");

				oel_font_weight_setting($wp_customize, $section, "setting_graisse_texte_article", "control_graisse_texte_article", "choisissez la graisse du caractère du texte de l' article");

				foreach($Hns as $Hn)
					{
						oel_font_family($wp_customize, "article", "setting_police_article_titre_" . $Hn, "control_police_article_titre" . $Hn, "Choisissez la police de caractère du titre " . $Hn . " de l' article");

						oel_size_setting($wp_customize, $section, "setting_taille_police_article" . $section . "_". $Hn, "control_taille_texte_article" . $section . "_". $Hn, "choisissez la taille de caractère du ". $Hn . " de l' article (en em)");
					}

		  	}

		 } /* end foreach */











}
add_action( 'customize_register' ,"oetl_typographie" );






?>