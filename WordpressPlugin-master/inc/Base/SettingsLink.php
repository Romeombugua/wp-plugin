<?php
/**
* @package customLuis-plugin
*/

namespace Inc\Base; //directoy

class SettingsLink
{   
    /*
    protected $this;

    public function __construct(){
        $this->plugin = PLUGIN;
    }
    */

    public function register(){
        add_filter("plugin_action_links_" . PLUGIN, array( $this, 'settings_link'));//the method to create the new link and especif the unique name of your plugin
    }
    
    public function settings_link( $links){//links is an array which content the plugin links (settings,edit,etc)
        // Add custom settings link
        $settings_link = '<a href="admin.php?page=luis_plugin">Settings</a>';
        array_push($links, $settings_link);//default wp array , new variable
        return $links;
    }

}