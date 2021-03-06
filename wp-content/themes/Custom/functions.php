<?php
/*Ce fichier fait partie deCustom, hello-elementor child theme.

Toutes les fonctions de ce fichier seront chargées avant les fonctions de thème parent.
En savoir plus sur https://codex.wordpress.org/Child_Themes.

Remarque : cette fonction charge la feuille de style parent avant, puis la feuille de style du thème enfant
(laissez-le en place à moins que vous sachiez ce que vous faites.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function Custom_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'Custom_enqueue_child_styles' );

/*Écrivez ici vos propres fonctions */
