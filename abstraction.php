<?php
abstract class Vehicle
{
public $name;
public $color;
public function Car()
{
  return $this->name.",".$this->color;
}
   abstract public function Bike();
}
class Bike extends Vehicle
{
  public function Bike()
  {
	return " Bullet";
  }
  public function Car()
  {
    return parent::Car();
  }
}
$vehicle=new Bike();
$vehicle->name = "Honda City";
$vehicle->color = "White";
echo $vehicle->Car();
echo $vehicle->Bike();
?>
