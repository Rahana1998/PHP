<?php
 class employee
{
	public $name;
	public $age;
	function __construct($n,$a)
	{
		$this->name=$n;
		$this->age=$a;
	}
public function setAge($ag)
{
	$this->ag=$ag;
}
public function display()
{
	echo "Welcome ".$this->name."<br>";
	return $this->age-$this->ag;
}
}
$employee=new employee("Shivan",30);
$employee->setAge(1);
echo "You are ".$employee->display()." Years old";
?>