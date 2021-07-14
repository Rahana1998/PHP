<?php
  class test
   {
	public $name="Sachin";
	function display()
	{
		echo $this->name."<br>";
	}
}
class demo extends test
{
 function show()
  {
	echo $this->name;
  }
}
$obj = new demo();
echo $obj->name."<br>";
$obj->display();
$obj->show();
?>