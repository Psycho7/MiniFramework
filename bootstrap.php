<?php

// Define BASE_PATH
define('BASE_PATH',__DIR__);

// Autoload
require BASE_PATH.'/vendor/autoload.php';

// Error
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
