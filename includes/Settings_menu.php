<?php

namespace ModernAdmin\Includes;

class Settings_menu{
    public function __construct(){
        add_action( 'admin_menu', array( $this, 'settings_menu_register' ) );
    }

    public function settings_menu_register(){
        add_menu_page(
            'Modern Admin',
            'Modern Admin',
            'manage_options',
            'modern-admin',
            array( $this, 'render_settings_menu' )
        );
    }

    public function render_settings_menu(){
        
    }
}