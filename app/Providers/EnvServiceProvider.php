<?php

namespace App\Providers;

use App\Providers\Contracts\ProviderInterface;
use Symfony\Component\Dotenv\Dotenv; 

class EnvServiceProvider extends ServiceProviders implements ProviderInterface
{
	public function register()
	{
		$this->app->singleton('env',function(){
			 	   $dotenv=new Dotenv();
			return $dotenv->load(__DIR__.'/../../.env');
			

		});

	}
}