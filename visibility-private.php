<?php

ini_set('display_errors',1);

class abc{
	private $name= 'sandeep kumar jain';
	function getName(){
 return $this->name ='ram';
	}
}
class def extends abc {

}
$abc = new abc();

echo '<br/>';
echo $abc->getName();

$def = new def();
echo $def->getName();
?>