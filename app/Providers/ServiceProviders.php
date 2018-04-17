<?php

namespace App\Providers;

use App\App;
use App\Providers\Contracts\ServiceProviderHandler;


class ServiceProviders implements ServiceProviderHandler
{
	protected $app;
	public function __construct(App $app){
		$this->app=$app;
	}
	public function handle(){
		$providers=require __DIR__.'/../../config/providers.php';
		foreach ($providers as $provider) {
			$provider=new $provider($this->app);
			$provider->register();
		}
	}
}