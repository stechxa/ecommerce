<?php 
echo "hello";
 
require_once __DIR__ . '/../bootstrap/init.php';
 //require_once __DIR__ .'/../app/config/_env.php';

 $app_name = getenv('APP_NAME');
echo "$app_name";



 ?>