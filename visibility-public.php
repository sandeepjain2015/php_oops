<?php

ini_set('display_errors',1);

class abc{
	public $name= 'sandeep kumar jain';
	function getName(){
 return $this->name ='ram';
	}
}
$abc = new abc();
echo $abc->name;
echo '<br/>';
echo $abc->getName();
?>