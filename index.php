<?php

require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('coneccion/your.log', Logger::WARNING));



$object = new App\Other\Object();


try {
	$conect = new App\Coneccion();
	$conect->setDb('mongo');
} catch (Exception $e) {
	echo 'Se ha generado un error en la coneccion';
	$log->error($e->getTraceAsString());	
}


