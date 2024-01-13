<?php
/**
* @package customLuis-plugin
*/

//this file is gonna show the plugin on the wp's sidebar


namespace Inc\Pages; //directoy

use Inc\Templates\Admintwo;//the class that we gonna use

class Admin
{
    public function register(){
        add_action('admin_menu', array( $this, 'add_admin_pages'));//we call the method that create the admin menu in wordpress and we add it at admin menu 
    }

    public function add_admin_pages(){//function that create the admin menu , a bunch of parametres and carry a callback function 
        add_menu_page('Luis Plugin'/*pagetitle*/,'LuisPlugin'/*menutitle*/,'manage_options'/*capability*/,'luis_plugin'/*menuSlug unique*/,
            array($this,'admin_index')/*callback function of the template*/,'dashicons-store'/*Icon*/,110/*postion*/);
    }

    public function admin_index(){
        // require template
        // require_once plugin_dir_path( __FILE__ ). '../Templates/admin.php';
        $admin = new Admintwo;//we initialize the class it's inmediatly works the construct function
    }
}