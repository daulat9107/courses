<?php

namespace App\Providers;

use App\Providers\Contracts\ProviderInterface;
use Noodlehaus\Config;

class ConfigServiceProvider extends ServiceProviders implements ProviderInterface
{
	public function register()
	{
		$this->app->singleton('config',function(){
		$file= __DIR__.'/../../config/config.php';
		return Config::load($file);
		});
	}
}