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


// Add option for Recaptcha Integration 
// you can integrate other types of forms as well
// module builder as well
// create database for entries
// add menu page to the admin section
// settings

require_once CONTACT_FORM_PATH . 'admin/admin_build.php';

