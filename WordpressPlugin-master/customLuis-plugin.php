<?php 
/**
* @package customLuis-plugin
*/

/*
PLugin Name: CustomLuis-plugin
Plugin URI: http://luisscura.com/wordpress
Description: This is my first custom plugin for wordpress
Version: 1.0
Author: LuisScura
Autor URI: http://luisscura.com/wordpress
Text Domain: customLuis-plugin
*/

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>

Copyright 2019  Luis Scura
*/

//
defined( 'ABSPATH' ) or die('Hey, you can\t acces this file, you silly human');

// Require once the Composer Autoload
if( file_exists( dirname( __FILE__ ). '/vendor/autoload.php') ) { // we use the autoload,only require file that we'll have
    require_once dirname ( __FILE__ ). '/vendor/autoload.php';
}else{
    echo "The file doesn't exits";
}

//DEFINE CONSTANTS 
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );//to use the plugin's folder url.
define( 'PLUGIN', plugin_basename( __FILE__ ) );//to use the plugin's basename.

use Inc\Base\Activate; 
use Inc\Base\Deactivate;  

//The code that runs during plugin activation
function luis_plugin_activate(){
    Activate::activate();//we just call the static method inside active.php(because we have the autoload) 
}

//The code that runs during plugin deactivation
function luis_plugin_deactivate(){
    Deactivate::deactivate();
}


if( class_exists('Inc\\Init')){ //we used the autoload convention  , and we check if the init class exists which is inside the init folder.
    Inc\Init::register_services();//We intilize the static function inside there (trigger all the methods) . Inc\Init::class to call the construct.
}

?>