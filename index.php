<?php

require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('coneccion/your.log', Logger::WARNING));



$object = new Prueba\Other\Object();


try {
	$conect = new Prueba\Coneccion();
	$conect->setDb('mongo');
} catch (Exception $e) {
	echo 'Se ha generado un error en la coneccion';
	$log->error($e->getTraceAsString());	
}


