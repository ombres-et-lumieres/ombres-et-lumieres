<?php
function oetl_customize_css()
{
	?>

	<style id = "customizer" type="text/css" > /* style du customizer */

	  body{
		  background-color: <?php echo get_theme_mod("setting_couleur_page", "#000000") ?> ;
		  color: <?php echo get_theme_mod("setting_couleur_texte", "#000000") ?> ;
		  font-size: <?php echo get_theme_mod("setting_taille_texte", "12"). "px" ?> ;
		  line-height: <?php echo get_theme_mod("setting_hauteur_ligne", "1") ?> ;
		  font-family: <?php echo get_theme_mod("setting_police_texte", "") ?> ;
		  font-weight: <?php echo get_theme_mod("setting_graisse_texte", "") ?> ;
		  font-style: <?php echo get_theme_mod("setting_style_texte", "") ?> ;
		  text-align: <?php echo get_theme_mod("setting_align_texte", "") ?> ;
		  }



	  body.single{
		  font-size: <?php echo get_theme_mod("setting_taille_police_article", "1"). "em" ?> ;
		  line-height: <?php echo get_theme_mod("setting_hauteur_ligne_article", "1") ?> ;
		  font-family: <?php echo get_theme_mod("setting_police_article", "") ?> ;
		  font-weight: <?php echo get_theme_mod("setting_graisse_texte_article", "") ?> ;
		  text-align: <?php echo get_theme_mod("setting_align_article", "") ?> ;
		  font-style: normal;
	  }

	  body.single h1{
		  font-size: <?php echo get_theme_mod("setting_taille_police_article_H1", "1"). "em"  ?> ;
		  font-family: <?php echo get_theme_mod("setting_police_article", "") ?> ;
	  }


	  body.single H2{
		  font-size: <?php echo get_theme_mod("setting_taille_police_article_H2", "1"). "em"  ?> ;
		  font-family: <?php echo get_theme_mod("setting_police_article", "") ?> ;
	  }


	  body.single h3{
		  font-size: <?php echo get_theme_mod("setting_taille_police_article_H3", "1"). "em"  ?> ;
		  font-family: <?php echo get_theme_mod("setting_police_article", "") ?> ;
	  }



	  <?php

	  $htmls_els = ["H1", "H2", "H3"];

	  foreach($htmls_els as $html_el)
	  {
		  echo $html_el?>{
		   font-family: <?php echo get_theme_mod("setting_police_". $html_el, "") ?> ;
		   color: <?php echo get_theme_mod("setting_couleur_" . $html_el, "#000000") ?> ;
		   font-size: <?php echo get_theme_mod("setting_taille_" .  $html_el, "1"). "em" ?>;
		   font-style: <?php echo get_theme_mod("setting_style_" .$html_el, "") ?> ;
		   font-weight: <?php echo get_theme_mod("setting_graisse_" . $html_el, "") ?> ;
		   line-height: <?php echo get_theme_mod("setting_hauteur_" . $html_el, "") ?> ;
		   text-decoration: <?php echo get_theme_mod("setting_decoration_" . $html_el, "") ?> ;
		   text-align: <?php echo get_theme_mod("setting_align_" . $html_el, "") ?> ;
		   text-decoration-style: <?php echo get_theme_mod("setting_decoration_style_" . $html_el, "") ?> ;
	   	  }
	  <?php
	  }

	  $liens = ["a", "a:visited", "a:hover"];

	  foreach($liens as $lien)
	  {
		  echo $lien?>{
		  	color: <?php echo get_theme_mod("setting_couleur_" . $lien, "#000000") ?> ;
		  	}
	  <?php
	  }
	?>
	</style>
	<?php

}
add_action( 'wp_head', 'oetl_customize_css');



























?>