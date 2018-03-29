  <?php
  $file= __DIR__.'/../config/config.json';
 /**
  * get file content
  * @return  string
  */
 $file=file_get_contents($file);

 /**
  * convert file in array
  */

$config=json_decode($file,true);


echo $config['mysql']['host'];die();