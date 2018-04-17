<?php
namespace App;

use App\Container\Container;


class App 
{
	private $container;
	public function __construct()
	{
	
		$this->container=Container::instance();
	}
	public function __get($name)
	{
		return $this->container->get($name);
	}
	public function __call($method,$args=[]){
		if(method_exists($this->container,$method)){
			return $this->container->singleton(...$args);
		}
		return null;
	}


}