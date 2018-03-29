<?php
define("PROJECT_PATH", '/savi/public/');
define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT'].PROJECT_PATH);
define("WEB_ROOT", "http://localhost".PROJECT_PATH);

require $_SERVER['DOCUMENT_ROOT'].'/savi/vendor/autoload.php';

use Whoops\Run;
use Noodlehaus\Config;
/**
 * get file path
 * @var [type]
 */

$file= __DIR__.'/../config/config.json';

$whoops = new Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



 $conf = Config::load($file);




