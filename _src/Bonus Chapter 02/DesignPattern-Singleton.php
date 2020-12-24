<?php
	class DB{		private static $singleton;		private function __construct(){}		public static function getInstance(){			if(self::$singleton){				self::$singleton = new DB();			}			return self::$singleton;		}	}	$db = DB::getInstance();
?>
