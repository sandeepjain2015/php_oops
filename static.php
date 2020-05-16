<?php

ini_set('display_errors',1);

class Demo{
	public static $name;
	public static function getName(){
		if ( ! empty( self:: $name ) ) {
			echo sprintf('<h1>%s</h1>', self:: $name );
		}
	}
	public static function setName($a){
		self:: $name = $a;
	}
}
Demo:: getName();
Demo:: setName('sandeep');
Demo:: getName();
?>