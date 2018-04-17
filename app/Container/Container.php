<?php

namespace App\Container;


class Container
{
	private static $instance;


	private $data=[];

	private function __construct()
	{

	}
	public static function instance()
	{
		if(!isset(static::$instance)){
			
			static::$instance=new Container();
		}
		return static::$instance;
	}

	public function singleton($property,$callback)
	{
		if(is_callable($callback)){
    	$this->data[$property]= call_user_func($callback);
    	}
	}

	public function get($property)
	{
		if(isset($this->data[$property])){
			return $this->data[$property];
		}

		return null;
		
	}
}