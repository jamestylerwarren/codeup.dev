<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static function isPost() 
    {
        return !empty($_POST) ? true : false;

    }


    public static function has($key)
    {
        // TODO: Fill in this function
        return isset($_REQUEST[$key]) ? true : false;
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    public static function getString($key){
        $validKey = self::get($key);
        if (!$validKey || !is_string($validKey)) {
            throw new Exception("{$validKey} must be a string"); 
        }
    }

    public static function getNumber($key){
        $validNum = self::get($key);
        if (!$validNum || !is_numeric($validNum)) {
            throw new Exception("{validNum must be a number");
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
