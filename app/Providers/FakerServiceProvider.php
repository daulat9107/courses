<?php

namespace App\Providers;

use App\Providers\Contracts\ProviderInterface;
use Faker\Factory;

class FakerServiceProvider extends ServiceProviders implements ProviderInterface
{
	public function register()
	{
		$this->app->singleton('faker',function(){
			return Factory::create();
		});

	}
}