<?php
function oetl_customize_css()
{
	$sections = ["page", "H1", "H2", "H3", "liens", "article"];

	$els_htmls = ["page", "H1", "H2", "H3"];

	$Hns = ["", "H1", "H2", "H3"];

	$liens = ["a", "a:visited", "a:hover"];

	?>
	<style id = "customizer" type="text/css" >
	<?php

	foreach ($sections as $section)
	{
		if ("page" == $section)
			{
				?>
body{
  background-color: <?php echo get_theme_mod("setting_background_page", "#000000") ?> ;
  color: <?php echo get_theme_mod("setting_couleur_page", "#000000") ?> ;
  font-size: <?php echo get_theme_mod("setting_font_size_page", "12"). "px" ?> ;
  line-height: <?php echo get_theme_mod("setting_hauteur_ligne_page", "1") ?> ;
  font-family: <?php echo get_theme_mod("setting_police_page", "") ?> ;
  font-weight: <?php echo get_theme_mod("setting_graisse_texte", "") ?> ;
  font-style: <?php echo get_theme_mod("setting_font_style_page", "") ?> ;
  text-align: <?php echo get_theme_mod("setting_align_page", "") ?> ;
  }
				<?php
		  }



		if (in_array($section, $Hns))
			{
echo $section?>{
				 font-family: <?php echo get_theme_mod("setting_police_". $section, "") ?> ;
				 color: <?php echo get_theme_mod("setting_couleur_" . $section, "#000000") ?> ;
				 font-size: <?php echo get_theme_mod("setting_taille_" . $section, "1"). "em" ?>;
				 font-style: <?php echo get_theme_mod("setting_style_" . $section, "") ?> ;
				 font-weight: <?php echo get_theme_mod("setting_graisse_" . $section, "") ?> ;
				 line-height: <?php echo get_theme_mod("setting_hauteur_" . $section, "") ?> ;
				 text-decoration: <?php echo get_theme_mod("setting_decoration_" . $section, "") ?> ;
				 text-align: <?php echo get_theme_mod("setting_align_" . $section, "") ?> ;
				 text-decoration-style: <?php echo get_theme_mod("setting_decoration_style_" . $section, "") ?> ;
				}
							<?php
			}


		if ("liens" == $section)
			{
			  foreach($liens as $lien)
			  {
echo $lien?>{
	color: <?php echo get_theme_mod("setting_couleur_" . $lien, "#000000") ?> ;
	}
			  <?php
			  }
			}


		if ("article" == $section)
			{
				?>
body.single{
			font-family: <?php echo get_theme_mod("setting_police_article", "") ?>;
			font-style: <?php echo get_theme_mod("setting_font_style_article", "") ?> ;
			font-size: <?php echo get_theme_mod("setting_font_size_article", "") ?>;
			font-weight: <?php echo get_theme_mod("setting_graisse_texte_article", "") ?>;
			text-align: <?php echo get_theme_mod("setting_align_article", "") ?>;
			}


				<?php

				foreach ($Hns as $Hn)
					{
					?>
body.single <?php echo " " . $Hn ?>{
								font-size: <?php echo get_theme_mod("setting_taille_police_article_" . $Hn, "1"). "em"  ?> ;
								font-family: <?php echo get_theme_mod("setting_police_article_titre_" . $Hn, "") ?> ;
							}
					<?php
					}
			}
	} /* end foreach */

}
add_action( 'wp_head', 'oetl_customize_css');



























?>