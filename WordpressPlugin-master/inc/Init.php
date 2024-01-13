<?php

/**
* @package customLuis-plugin
*/

namespace Inc; 

final class Init //will never be extending.
{
    /** 
    * Store all the classes inside an array
    * and return an array full list of classes 
    */
    public static function get_services()
    {
        return [
            Pages\Admin::class, //We return the entire class without intiliaze it(inside an array). If we don't specif the class we're actually pointing to just the file.
            //every time I have a new class that I want create a new instance and I want to call the register method . Just add another class name here inside the return value of my array.  
            Base\Enqueue::class,
            Base\SettingsLink::class

        ];
    }
    
    /*
    * loop through the classes, intiliaze them, and call
    * the register() method if it exists
    */
    public static function register_services()//is going to use only: to register our services(classes) and return instance of those classes or to return specific methods . Is that way should never get extends.
    {
        foreach( self::get_services() as $class ){ //in this class that we didn't intiliaze (SELF), if the class was intiliaze we can use THIS (the instance of the class will be stored in this) , but we are also using static function method
            $service = self::instantiate( $class );
            if( method_exists( $service, 'register') ){//is the same as class_exits 
                $service->register();
            }
        }
    }

    /*
    *Initiliaze the class
    *param class $class, class from the services array
    *return class instance, new instance of the class
    */
    private static function instantiate( $class ) //param class because we're passing the class variable that content all those pages.
    {        
        $service = new $class(); //stored a service variable
        
        return $service;    
    }
}


