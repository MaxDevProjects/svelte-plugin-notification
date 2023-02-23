<?php
/*
Plugin Name: svelte plugin
Plugin URI:  https://clower.fr/blog
Description: Plugin de demo svelte
Author: Clower Web Conception - Maxime G. Martin
Version: 1.0
Author URI: https://clower.fr/
*/

// initialisation du plugin
function init_plugin_svelte () {
// intégration du style css compilé
    wp_enqueue_style('svelte_p_style', plugin_dir_url(__FILE__) . 'public/dist/main.svelte-p.css');
// insertion de la balise de controle svelte qui permet d'afficher notre code svelte
    echo '<div id="svelte-p"></div>';
// Intégration du code javascript compilé
    wp_enqueue_script('svelte_p_js', plugin_dir_url(__FILE__) . 'public/dist/bundle.svelte-p.js');
}

add_action( 'wp_body_open', 'init_plugin_svelte', 61 );