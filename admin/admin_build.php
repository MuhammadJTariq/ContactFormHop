<?php

if(!defined('ABSPATH')){
    exit;
}

// first check user capabilities if they are admin

add_action( 'admin_menu', 'my_plugin_admin_menu' );

function my_plugin_admin_menu() {

    add_menu_page(
        'Contact Form Hop',
        'Contact Form',
        'manage_options',
        'contact-form',
        'contact_form_admin_page',
        'dashicons-admin-generic',
        30
    );

    add_submenu_page(
        'contact-form',          // Parent slug
        'Entries',               // Page title
        'Entries',               // Menu title
        'manage_options',        // Capability
        'contact-form-entries',  // Child slug
        'contact_form_entries_page'
    );
}

function contact_form_admin_page() {
    ?>
    <div class="wrap">
        <div id="my-plugin-root"></div>
    </div>
    <?php
}



add_action('admin_enqueue_scripts', 'contact_form_enqueue_scripts');


function contact_form_enqueue_scripts($hook){
    if($hook !== 'toplevel_page_contact-form'){
        return;
    }

    $asset_file = CONTACT_FORM_PATH . 'build/index.asset.php';
    if(!file_exists($asset_file)){
        return;
    }

    $asset = require $asset_file;

    wp_enqueue_script(
        'contact-form-admin',
        CONTACT_FORM_URL . 'build/index.js',
        $asset['dependencies'], 
        $asset['version'],
        true
    );


}


//rewrite URL For Form Submissions


add_action('rest_api_init', 'contact_form_routes');



function contact_form_routes(){
    register_rest_route(
        'contact-form/v1',
        '/submit',
        [
            'methods' => 'POST',
            'callback' => 'contact_form_handle_submission',
            'permission_callback' => '__return_true'
        ]
    );
}