<?php
namespace Prueba;
class Coneccion {
	function setDb($db) {
		switch ($db) {
			case 'mysql':
				return true;
				break;
			case 'sql':
				return true;
				break;
			default:
				throw new \Exception("Error de coneccion de la base de datos", 1);
				break;
		}
	}
}