<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static function isPost() {
        return !empty($_POST) ? true : false;

    }


    public static function has($key) {
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
    public static function get($key, $default = null) {
        // TODO: Fill in this function
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    public static function getString($key, $min = 0, $max = 1000){
        $validKey = self::get($key);
        if (!is_string($key) || !is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException("Invalid argument");
        }
        if (!self::has($key)) {
            throw new OutOfRangeException("Out of range exception");
        }
        if (is_numeric($validKey)) {
            throw new DomainException("Domain exception - not the correct type");
        }
        if ($min > strlen($validKey) || $max < strlen($validKey)) {
            throw new RangeException("String length is less than {$max} or greater than {max}");
        }
        
        return trim($validKey);
    }

    public static function getNumber($key, $min = 0, $max = 40, $default = 0){
        $validNum = self::get($key, $default = 0);
        if (!is_numeric($key) || !is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException("Invalid argument");
        }
        if (!self::has($key)) {
            throw new OutOfRangeException("Out of range exception");
        }
        if (!is_numeric($validNum)) {
            throw new DomainException("Domain exception - not the correct type");
        }
        if ($min > $validNum || $max < $validNum) {
            throw new RangeException("Number is less than {$min} or greater than {max}");
        }

        return floatval($validNum);
    }
    public static function getDate($key) {
        $validDate = self::get($key);
        if (!strtotime($validDate)) {
            throw new Exception("{$validDate} is not a valid date");
        } 
        $date = new DateTime($validDate);
        return $date;
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
