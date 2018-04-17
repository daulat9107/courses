<?php
use App\App;
use App\Providers\ServiceProviders;
/**
 * when we initialize App then it calls constructor method & set container instance in private container property.
 * Now if instance of container is not set we will set the instance of container & return the instance.
 * else relurns the old instance of container
 * 
 */

$app=new App();

/**
 *
 * the singleton method is not available in app class so our magic method __call  gets mehtod name as a argument & argument of singleton as a second argument.
 * now the argument of the singleton method are availabele inside of __call as array.
 * now becouse of singleton method is not available in app class & we have instance of container as a private property in app class, we will check container class has method singleton.
 * if yes then return the singleton method and pass the arguments 
 * ['providers','callback'] we need to convert value in commam saprated 
 * format e.g providers,callback  for that we user ...$args
 * else return null
 * the first argument of singleton is a property nothing but the name of the
 * any new object means we r giving name to the object
 * the second argument is a callback function for that we check is callable or not if its callable then it means its a function so condition is true 
 * now bcoz its a callable we use php function call_user_func 
 * what this function will do it will call that callable function 
 * like we call any normal function e,g. abc()
 *
 * now becoz that function become callable it will return 
 * output as any normal function
 * now we have to store output of that function in an array 
 * so in our e.g. [
 * 'providers'=>output of the callable function
 * ]  
 * now what is the output of the function?
 * In our senairo we want output of the callable function always an
 * object
 * why??
 * Becoz we want to make that external object or third party object whatever 
 * you call it as a part of our App
 * Now in this case providers become an object
 * now what is the providers??
 * Its a Dynamic property of app object
 * Now when we call $app->providers what will happen?
 * First we will check the providers property is not in a app class
 * now becoz provider property is not in our app class 
 * but we have __get() in our app class so we know that 
 * when a property is not inside of app class __get() magic method creates 
 * dynamic properties
 * the __get() method accept dynamic property as a argument in our case 
 * its a $name e.g. __get($name)
 * now we pass that name in a get($name) method of private container instance of app class
 * now inside of container get() method we acceptthat name as a arg
 * now we know that PRIVATE DATA property contains all objects bcoz we added that object with a singleton mehtods 
 * now we check data property hava that object if yes 
 * return that object
 * otherwise return null
 * 
 *   
 * 
 */

$app->singleton('providers',function() use ($app){
	/**
	 * Becoz Service providers class require app object 
	 * How can we pass app object in this closure for that
	 * we use "use" keyword it will resolve scope of the app
	 * object inside of the closure 
	 * Once we instantiate service provider class app object 
	 * pass inside of the construct() method 
	 */
return new ServiceProviders($app);
});

$app->providers->handle();
$app->whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$app->whoops->register();




return $app;