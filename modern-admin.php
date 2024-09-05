<?php

/*
 * Plugin Name: Modern Admin Panel
*/

require_once 'vendor/autoload.php';

class Modern_Admin{
    private static $instance;
    public static function get_instance(){
        if( ! self::$instance ){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct(){
        new ModernAdmin\Includes\Settings_menu();
    }

}

Modern_Admin::get_instance();