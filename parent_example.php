<?php
class Car {
public function carName(){
	echo 'parentCar';
}
public function carNameParent(){
	return self::carName();
}
}

class SportCar extends Car{
public function carName(){
	echo 'child car';
}

public function carNameParent(){
	parent:: carNameParent();
}

}

$a = new SportCar();

$a->carName();
echo '<br/>';
echo $a->carNameParent();