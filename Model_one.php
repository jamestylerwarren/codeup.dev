<?php
require 'Input.php';

class Model {
	private $attributes = [];
	protected static $table;

	public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }
    public function __get($name) 
    {
    	if (array_key_exists($name, $this->attributes)) {
    		return $this->attributes[$name];
    	} else {
    		echo "{$name} key does not exist";
    	}
    }
    public static function getTableName()
    {
    	return static::$table;
    }
}

var_dump(Model::getTableName());

