<?php
/**
* @package customLuis-plugin
*/

namespace Inc\Base;//it's kind of notice to this file that will be autolaod with Inc.

class Deactivate //extremely important to write the same name as the file
{
    static function deactivate(){
        // flush rewrite rules
        flush_rewrite_rules();  //when we create something new in the wp's database  we should tell wp "refresh all yours new tuffs"    
    }
}
