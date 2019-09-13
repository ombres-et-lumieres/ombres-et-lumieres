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
  font-family: <?php echo get_theme_mod("oetl_setting_font_page", "") ?> ;
  background-color: <?php echo get_theme_mod("oetl_setting_background_page", "#000000") ?> ;
  color: <?php echo get_theme_mod("oetl_setting_color_page", "#000000") ?> ;
  font-size: <?php echo get_theme_mod("oetl_setting_font_size_page", "100"). "%" ?> ;
  text-align: <?php echo get_theme_mod("oetl_setting_text_align_page", "") ?> ;
  font-style: <?php echo get_theme_mod("oetl_setting_font_style_page", "") ?> ;
  font-weight: <?php echo get_theme_mod("oetl_setting_font_weight_texte_page", "") ?> ;
  line-height: <?php echo get_theme_mod("oetl_setting_line_height_page", "1") ?> ;
  }
				<?php
		  }



		if (in_array($section, $Hns))
			{
echo $section?>{
				 font-family: <?php echo get_theme_mod("oetl_setting_font_". $section, "") ?> ;
				 color: <?php echo get_theme_mod("oetl_setting_color_" . $section, "#000000") ?> ;
				 font-size: <?php echo get_theme_mod("oetl_setting_font_size_" . $section, "1"). "em" ?>;
				 font-style: <?php echo get_theme_mod("oetl_setting_font_style_" . $section, "") ?> ;
				 font-weight: <?php echo get_theme_mod("oetl_setting_font_weight_texte_" . $section, "") ?> ;
				 line-height: <?php echo get_theme_mod("oetl_setting_line_height_" . $section, "") ?> ;
				 text-decoration: <?php echo get_theme_mod("oetl_setting_text_decoration_" . $section, "") ?> ;
				 text-align: <?php echo get_theme_mod("oetl_setting_text_align_" . $section, "") ?> ;
				 text-decoration-style: <?php echo get_theme_mod("oetl_setting_text_decoration_style_" . $section, "") ?> ;
				}
							<?php
			}


		if ("liens" == $section)
			{
			  foreach($liens as $lien)
			  {
echo $lien?>{
	color: <?php echo get_theme_mod("oetl_setting_color_" . $lien, "#000000") ?> ;
	}
			  <?php
			  }
			}


		if ("article" == $section)
			{
				?>
body.single{
			font-family: <?php echo get_theme_mod("oetl_setting_font_article", "") ?>;
			font-style: <?php echo get_theme_mod("oetl_setting_font_style_article", "") ?> ;
			font-size: <?php echo get_theme_mod("oetl_setting_font_size_article", "") . "em" ?>;
			font-weight: <?php echo get_theme_mod("oetl_setting_font_weight_texte_article", "") ?>;
			text-align: <?php echo get_theme_mod("oetl_setting_text_align_article", "") ?>;
			}


				<?php

				foreach ($Hns as $Hn)
					{
					?>
body.single <?php echo " " . $Hn ?>{
								font-size: <?php echo get_theme_mod("oetl_setting_font_size_article_" . $Hn, "1"). "em"  ?> ;
								font-family: <?php echo get_theme_mod("oetl_setting_font_article_titre_" . $Hn, "") ?> ;
							}
					<?php
					}
			}
	} /* end foreach */


	$wplr_els = ["galerie", "figure", "figcaption"];


	foreach ($wplr_els as $wplr_el)
	{

		switch($wplr_el)
			{
			case "galerie";
				$class = ".mgl-masonry-container";
				break;
			case "figure";
				$class = "figure.mgl-item";
				break;
			case "figcaption";
				$class = "figcaption.mgl-caption";
				break;
			}
		?>
		<?php echo $class ?>{
			background-color: <?php echo get_theme_mod("oetl_setting_color_" . $wplr_el, "#000000") ?>;
			margin: <?php echo get_theme_mod("oetl_setting_margin_" . $wplr_el, "0"). "%" ?> ;
			padding: <?php echo get_theme_mod("oetl_setting_padding_" . $wplr_el, "0"). "%" ?> ;
			border-width: <?php echo get_theme_mod("oetl_setting_border_width_" . $wplr_el, "0"). "%" ?> ;
			border-color: <?php echo get_theme_mod("oetl_setting_border_color_" . $wplr_el, "#000000") ?> ;
		}
		<?php
	}
}
add_action( 'wp_head', 'oetl_customize_css');



























?>