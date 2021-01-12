<?php

class DAO {

	private static $sharedPDO;
	protected $pdo;

	function __construct() {

		if(empty(self::$sharedPDO)) {

      $dbHost = getenv('PHP_DB_HOST') ?: "ID281849_makerfaire.db.webhosting.be";
      $dbName = getenv('PHP_DB_DATABASE') ?: "ID281849_makerfaire";
      $dbUser = getenv('PHP_DB_USERNAME') ?: "ID281849_makerfaire";
      $dbPass = getenv('PHP_DB_PASSWORD') ?: "Minidevine4life";

			self::$sharedPDO = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}


}

 ?>
