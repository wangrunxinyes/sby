<?php

namespace common\models;

require_once 'rb.php';
use RedBeanPHP\Facade;

class RedBean extends Facade {
	public $testResult;
	function __construct() {
		$this->testResult = false;
		$ini = parse_ini_file ( "sql.ini", true );
		$host = $ini ['mysql'] ['host'];
		if($_SERVER['SERVER_NAME'] != 'wangrunxin.com'){
			$host = "localhost";
		}
		self::setup ( "mysql:host=" . $host . ";dbname=" . $ini ['mysql'] ['schema'], $ini ['mysql'] ['user'], $ini ['mysql'] ['pass'] );
	}
	function test() {
		try {
			$unit = $this->dispense ( "runxin" );
			$unit->testTime = time ();
			$this->testResult = true;
			return $this->store ( $unit );
		} catch ( Exception $e ) {
			return $e->getMessage ();
		}
	}
	public static function init($type) {
		return self::dispense ( $type );
	}
}

?>