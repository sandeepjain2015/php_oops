<?php
//public :: acceess from any where.
// private :: access inside class only.
//protected :: access inside class and child class only.
ini_set('display_errors',1);

class abc{
	protected $name= 'sandeep kumar jain';
	function getName(){
 return $this->name ='ram';
	}
}
class def extends abc {
public function childName(){
	return $this->name;
}
}
$abc = new abc();

echo '<br/>';
echo $abc->getName();

$def = new def();
echo $def->childName();
?>