<?php
class demo
{
  private $name="Shiva";
  private function show()
  {
	echo "Hello Welcome";
  }
}
class test extends demo
{
 function shows()
 {
	echo $this->name;
 }
}
$obj = new test;
$obj->show();
$obj->shows();
?>