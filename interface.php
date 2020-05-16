<?php
error_reporting(E_ALL);
interface check1{
	public function ram();
	public function shyam();
}
interface check2{
	public function mahavir();
}
class god implements check1,check2{
	public function ram(){
		echo 'ram';
	}
	public function shyam(){
		echo 'shyam';
	}
	function mahavir(){
		echo 'god mahavir';
	}
}
$god = new god();
$god->ram();
$god->mahavir();

?>