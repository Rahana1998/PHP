<?php
class Vehicle
{
	function Name()
	 {
		echo " Car";
	  }
}
class Color extends Vehicle
{
	function Color()
	{
		echo "Black";
	}
}
$obj= new Color();
$obj->Name();
?>


