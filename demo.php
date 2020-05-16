<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
abstract class Procesure {
	public $property;
	public function __construct($property){
$this->property = $property;
	}
	public function addWater(){
		echo 'add water<br/>';
	}
	public function addSuger(){
		echo 'add sugar<br/>';
	}
	public function addMilk(){
		echo 'add milk<br/>';
	}
	public function make(){
		$this->addWater();
		$this->addSuger();
		$this->addMilk();
		echo $this->property.' done by 1<br/>';
	}
	
	}
class Tea extends Procesure {
	
}
class Coffee extends Procesure {
	
	}
$tea= new Tea('tea');
$tea->make();
// $coffe = new Coffee('coffee');
// $coffe->make();

?>