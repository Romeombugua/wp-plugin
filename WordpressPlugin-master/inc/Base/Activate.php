<?php
/**
* @package customLuis-plugin
*/

namespace Inc\Base; //so in the main file we can make reference to this file to Inc\ and the class

class Activate //should be the same name as the file
{
    static function activate(){
        // flush rewrite rules
        flush_rewrite_rules();  //when we create something new in the wp's database  we should tell wp "refresh all yours new tuffs" 
    }
}