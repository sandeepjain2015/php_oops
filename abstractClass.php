<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
abstract class Car{
	public $name;
	public function __construct( $name ){
$this->name = $name;
$this->intro();
	}
	abstract public function intro();
}
class Audi extends Car{
public function intro(){
	echo sprintf('currently on %s', $this->name );
}
}
class Maruti extends Car{
	public function intro(){
		echo sprintf('currently on %s', $this->name );
	}
	}
$audi = new Audi('audi');
$Maruti = new Audi('Maruti');
?>