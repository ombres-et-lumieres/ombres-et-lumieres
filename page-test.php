<?php
/**
 * Template Name: page de test
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				while ( have_posts() )
					{
						the_post();

						get_template_part( 'template-parts/content', 'page' );


					} // End of the loop.


			$mods = get_theme_mods();



$html_el = "H1";


echo "setting_text_decoration:  ". get_theme_mod("setting_text_decoration_" . $html_el, "") ."</br>";
echo "setting_text_align:  " .get_theme_mod("setting_text_align_" . $html_el, "") ."</br>";



echo '<p>';

foreach($mods as $key => $value)
	{

		$htmls_els = ["setting_graisse_H1", "setting_graisse_H2", "setting_graisse_H3", "setting_graisse_p"];

		if (in_array($key, $htmls_els))
		{
			echo  $key . "  => " . $value . "</br></br>";
		}
	}
echo "</p>";
			?>
			<div class="vardump">
			<h1>$mods</h1>
			<pre>
			<?php var_dump($mods);  ?>
			</pre>
			</div>
			<?php


 get_footer();

 ?>


