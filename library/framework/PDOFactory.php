<?php

namespace framework;

class PDOFactory{

	public static function mysqlConnexion(){

		
		$db = new \PDO('mysql:localhost;dbname=histoire', 'root', ' ');

		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
		return $db;
	}
}