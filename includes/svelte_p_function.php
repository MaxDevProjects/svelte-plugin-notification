<?php

/*
 * position par défault du plugin dans la liste de widget
 * insersion du contenu de la function 'init_plugin_svelte' dans le <body>
 * grâce au wordpress hook 'wp_body_open'
 */

/*
 * Insertion du plugin front dns le body
 */
add_action( 'wp_body_open', 'init_plugin_svelte', 61 );
// initialisation du plugin
function init_plugin_svelte () {
// intégration du style css compilé
    wp_enqueue_style('svelte_p_style', plugin_dir_url(__FILE__) . '../dist/public.css');
// insertion de la balise de controle svelte qui permet d'afficher notre code svelte
    echo '<div id="svelte-p"></div>';
// Intégration du code javascript compilé
    wp_enqueue_script('svelte_p_js', plugin_dir_url(__FILE__) . '../dist/public.js');
}

/*
 * Ajout d'un nouveau menu dans le panneau de controle
 */
add_action( 'admin_menu', 'svelte_p_add_admin_link' );
function svelte_p_add_admin_link()
{
    add_menu_page(
        'Admin - Svelte notification', // Title of the page
        'Svelte notification', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'svelte-plugin/includes/svelte_p_config_page.php' // The 'slug' - file to display when clicking the link
    );
}


add_filter('script_loader_tag', 'add_type_to_js_scripts' , 10, 3);
// resourdre les probleme de lecture des différents javascript en tant que module
function add_type_to_js_scripts($tag, $handle, $source){
  // Liste des scripts nécessitant l’attribut "type=module"
  $theme_handles = array(
    'svelte_p_js',
    'svelte_p_back_js',
      );
    // boucler le tableau $theme_handles et filter la balise script
    // ref : https://www.danielpringle.co.uk/code/using-modular-javascript-with-wordpress/
	  foreach($theme_handles as $theme_handle) {
		if ($theme_handle === $handle) {
			return $tag = '<script src="'. esc_url($source).'" type="module"></script>';
		}
	 }
}