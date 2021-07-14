<?php
   class test
    {
	public function test()
	{
		echo "Hello";
	}
    }
    
    class tests extends test
    {
	public function __construct()
	{
		echo parent::test();
		echo "Welcome";
	}
	public function __destruct()
	{
		echo " To Kerala";
	}
    }
$obj = new tests();
?>