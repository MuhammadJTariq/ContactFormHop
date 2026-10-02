<?php

/**
 * Plugin Name: Contact Form 
 * Description: Contact Form Plugin
 * Version: 1.0.0
 * Author: Muhammad
 */


if(!defined('ABSPATH')){
    exit;
}


define('CONTACT_FORM_VER', '1.0.0');
define('CONTACT_FORM_PATH', plugin_dir_path( __FILE__ ));
define('CONTACT_FORM_URL', plugin_dir_url(__FILE__));
define('ERROR_LOG', CONTACT_FORM_PATH . '/logs/error_log.php' );



function log_error($value){
    if(file_exists(ERROR_LOG)){
        file_put_contents(ERROR_LOG, $value, FILE_APPEND, JSON_PRETTY_PRINT);
    }

    return;
}



// Add option for Recaptcha Integration 
// you can integrate other types of forms as well
// module builder as well
// create database for entries
// add menu page to the admin section
// settings

require_once CONTACT_FORM_PATH . 'admin/admin_build.php';

require_once CONTACT_FORM_PATH . 'Inc/bootstrap.php';

