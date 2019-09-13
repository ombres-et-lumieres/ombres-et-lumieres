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
					$description = __("polices, tailles graisses et hauteur de ligne de la page (niveau de la balise body donc pour l' entièreté du site)", "ombres-et-lumieres" );

					$label = "choisissez la taille de caractère du texte de la page en % (entre 50 et 150) ";
				}


			if (in_array($section, $Hns))
				{
					$description =  __("polices, tailles graisses et hauteur de ligne de l' élément " . $section . "(niveau de la balise body)", "ombres-et-lumieres" );

					$label = "choisissez la taille de " . $section . "(en em)";
				}



			if ("liens" == $section)
				{
					$description = __("couleurs des liens normaux, visités et survolés", "ombres-et-lumieres" );

					//$label =
				}


			if ("article" == $section)
				{
					$description = __("polices, tailles graisses et hauteur de ligne pour les éléments d' un article. Il surpasse certaines informations utilisées dans l' onglet pages", "ombres-et-lumieres");

					$label = "choisissez la taille de caractère du texte de l' article (en em)";
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
			if ("liens" != $section)
				{
					if (!in_array($section, $Hns))
						{
					oel_font_family($wp_customize, $section, "oetl_setting_font_" . $section, "oetl_control_font_" . $section, "textes", "Choisissez la police de caractère pour " . $section);
						}
						else
							{
								oel_font_family($wp_customize, $section, "oetl_setting_font_" . $section, "oetl_control_font_" . $section, "titres", "Choisissez la police de caractère pour " . $section);
							}

					oel_color_setting($wp_customize, $section, "oetl_setting_color_" . $section, "oetl_control_color_" . $section, "choisissez la couleur de caractère de " . $section);

					if("page" == $section)
						{
							oel_color_setting($wp_customize, $section, "oetl_setting_background_" . $section, "oetl_control_background_" . $section, "choisissez la couleur d' arrière plan de " . $section);

							oel_size_setting($wp_customize, $section, "oetl_setting_font_size_" . $section, "oetl_control_font_size_" .$section, "font_size_pourcent", $label);
						}
						else
							{
								oel_size_setting($wp_customize, $section, "oetl_setting_font_size_" . $section, "oetl_control_font_size_" .$section, "em", $label);

							}

					oel_text_align_setting($wp_customize, $section, "oetl_setting_text_align_" . $section, "oetl_control_text_align_" . $section, "Choisissez l' alignement pour le texte " . $section);

					oel_font_style_setting($wp_customize, $section, "oetl_setting_font_style_" . $section, "oetl_control_font_style_" . $section, "Choisissez le style de police pour: " . $section);

					oel_font_weight_setting($wp_customize, $section, "oetl_setting_font_weight_texte_" . $section, "oetl_control_font_weight_texte_" . $section, "choisissez la graisse du caractère du texte de " . $section);

					oel_size_setting($wp_customize, $section, "oetl_setting_line_height_" . $section, "oetl_control_liine_height_" . $section, "em", "choisissez la hauteur de ligne du texte de" . $section);

					if (in_array($section, $Hns))
				  		 {
				      		oel_text_decoration_setting($wp_customize, $section, "oetl_setting_text_decoration_" . $section, "oetl_control_text_decoration_" . $section, "Choisissez la décoration pour le titre " . $section);

							oel_text_decoration_style_setting($wp_customize, $section, "oetl_setting_text_decoration_style_" . $section, "oetl_control_text_decoration_style" . $section, "Choisissez le style de décoration pour le titre " . $section);
				  		 }
				}
				else
					{
						$liens = ["a", "a:hover", "a:visited"];

						foreach ($liens as $lien)
							{
								oel_color_setting($wp_customize, $section, "oetl_setting_coulor_" . $lien, "oetl_control_color_" . $lien, "choisissez la couleur du lien " . $lien);
							}
					}

		  if ("article" == $section)
		  	{

			foreach($Hns as $Hn)
				{
					oel_font_family($wp_customize, "article", "oetl_setting_font_article_titre_" . $Hn, "oetl_control_police_article_titre_" . $Hn, "textes", "Choisissez la police de caractère du titre " . $Hn . " de l' article");

					oel_size_setting($wp_customize, $section, "oetl_setting_font_size_article_" . $Hn, "oetl_control_taille_texte_article_" . $Hn, "em", "choisissez la taille de caractère du ". $Hn . " de l' article (en em)");
				}

		  	}

		 } /* end foreach général */

}
add_action( 'customize_register' ,"oetl_typographie" );






?>