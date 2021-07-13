<?php
  class Vehicle{
	
	public $name;
	public $color;

    function set_name($name)	
	{
	  $this->name = $name;
	}
    function get_name()
	{
	  return $this->name;
	}
    function set_color($color)
	{
	  $this->color = $color;
	}
    function get_color()
	{
	  return $this->color;
	}
}

$Car = new Vehicle();
$Car->set_name('Car');
$Car->set_color('Black');
echo "Name: ". $Car->get_name();
echo "<br>";
echo "Color: ". $Car->get_color();
?>