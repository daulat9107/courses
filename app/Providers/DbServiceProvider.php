<?php

namespace App\Providers;

use App\Providers\Contracts\ProviderInterface;
use App\Providers\ServiceProviders;
use PDO;
class DbServiceProvider extends ServiceProviders implements ProviderInterface
{
	public function register()
	{
		$this->app->singleton('db',function(){
			try{
				$config=$this->app->config;
				$connection= new PDO(
					"mysql:host=".$config->get('driver.mysql.host').";dbname=".$config->get('driver.mysql.dbname'),
					$config->get('driver.mysql.username'),
					$config->get('driver.mysql.password'));
				$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				return $connection;
				
			}catch(PDOException $e){
				echo "connection Failed ". $e->getMessage();
			}

		});

	}
}