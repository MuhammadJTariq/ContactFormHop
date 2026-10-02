<?php 


if(!defined('ABSPATH')){
    exit;
}


add_action('init', 'contact_form_register_post_type');

add_action('admin_init', 'contact_form_remove_editor' );

add_action('edit_form_after_title', 'contact_form_editor');




function contact_form_register_post_type(){
    register_post_type(
        'contact_form', [
            'labels' => [
                'name' => 'Forms', 
                'singular_name' => 'Form', 
                'add_new' => 'Add Form', 
                'edit_item' => 'Edit Form'
            ], 

            'public' => false, 
            'show_ui' => true, 
            'show_in_menu' => true, 
            'show_in_rest' => false, 
            'supports' => [
                'title'
            ],
        ]
    );
}


function contact_form_editor($post){
    if($post->post_type !== 'contact_form'){
        return;
    }

    ?>

    <div id="contact-form-root" data-page="editor">

    </div>

    <?php
}



function contact_form_remove_editor(){
    remove_post_type_support( 
        'contact_form', 
        'editor'
     );
}


