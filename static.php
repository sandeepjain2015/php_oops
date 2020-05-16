<?php

ini_set('display_errors',1);

class Demo{
	public static $name;
	public static function getName(){
		echo self:: $name;
	}
	public static function setName($a){
		self:: $name = $a;
	}
}
Demo:: setName('sandeep');
Demo:: getName();
?>