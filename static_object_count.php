<?php
// Check how much time object created.
ini_set('display_errors',1);

class Count{
	public static $count=0;
	public function __construct(){
		self:: $count ++;
	}
	public function getCount(){
		return self:: $count;
	}
}
$a = new Count();
$b = new Count();
echo Count:: getCount();
?>