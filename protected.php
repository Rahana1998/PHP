<?php
class demo
{
  protected $a=400;
  protected $b=500;
  	function add()
    {
	echo $sum = $this->a+$this->b."<br>";
    }
}
class test extends demo
{
function multi()
{
	echo $multi=$this->a*$this->b."<br>";
}
}
$obj= new test;
$obj->add();
$obj->multi();
?>