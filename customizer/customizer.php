<?php



/* ajout de panneaux dans le customizer */
require get_template_directory() . '/customizer/new-pannels.php';


/* ajout de panneaux dans le customizer */
//require get_template_directory() . '/customizer/titles.php';


/* ajout d' actions dans le customizer */
require get_template_directory() . '/customizer/customizer-actions.php';


/* ajout de fonctions dans le customizer */
require get_template_directory() . '/customizer/customizer-functions.php';


/* ajout de la section couleur dans le customizer */
//require get_template_directory() . '/customizer/couleurs.php';



/* ajout de la section typographie dans le customizer */
require get_template_directory() . '/customizer/typographie.php';





/* le css du customizer */
require get_template_directory() . '/customizer/css.php';



function oetl_remove_sections($wp_customize)
{

	/* retire la section image d' en tête */
	$wp_customize->remove_section("header_image");


	/* retire la section image de fond */
	$wp_customize->remove_section("background_image");

}
add_action( 'customize_register' ,"oetl_remove_sections" );


?>