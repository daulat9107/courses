<?php

namespace App\Providers;

use App\Providers\Contracts\ProviderInterface;
use Whoops\Run;

class WhoopsServiceProvider extends ServiceProviders implements ProviderInterface
{
	public function register()
	{
		$this->app->singleton('whoops',function(){
		return  new Run;
		});
	}
}