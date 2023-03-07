<?php

function init_plugin_svelte_administration () {
    echo
    '<h1>Admin - Svelte Notification</h1>
    <div id="custom-notification-render"></div>';
}

function administration_scripts () {
    wp_enqueue_style('svelte_p_back_style', plugin_dir_url(__FILE__) . '../dist/admin.css');
    wp_enqueue_script('svelte_p_back_js', plugin_dir_url(__FILE__) . '../dist/admin.js');
}

administration_scripts();
init_plugin_svelte_administration();
