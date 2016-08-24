<?php 

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');


define('BIND_MODULE','Admin');

define('BUILD_CONTROLLER_LIST','Index,User,Good');

define('BUILD_MODEL_LIST','User,Good');


// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';


 ?>