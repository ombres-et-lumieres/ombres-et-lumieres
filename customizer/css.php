<?php
function oetl_customize_css()
{
	?>

	<style type="text/css" >

	  body{background-color: <?php echo get_theme_mod("setting_couleur_page", "#000000") ?> ;}

	  <?php
	  $htmls_els = ["H1", "H2", "H3", "p"];

	  foreach($htmls_els as $html_el)
	  {
		  echo $html_el?>{
		   font-family: <?php echo get_theme_mod("setting_police_". $html_el, "") ?> ;
		   color: <?php echo get_theme_mod("setting_couleur_" . $html_el, "#000000") ?> ;
		   font-size: <?php echo get_theme_mod("setting_taille_" .  $html_el, "100%") ?>;
		   font-style: <?php echo get_theme_mod("setting_style__" .$html_el, "") ?> ;
		   font-weight: <?php echo get_theme_mod("setting_graisse_" . $html_el, "") ?> ;
		   line-height: <?php echo get_theme_mod("setting_hauteur_" . $html_el, "125%") ?> ;
		   text-decoration: <?php echo get_theme_mod("setting_text_decoration_" . $html_el, "") ?> ;
		   text-align: <?php echo get_theme_mod("setting_text_align_" . $html_el, "") ?> ;
		   text-decoration-style: <?php echo get_theme_mod("setting_text_decoration_style_" . $html_el, "") ?> ;
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