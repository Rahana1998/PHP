<?php
class Exception extends Except
{
 function get_Message()
  {
	$errorMsg = 'Error on line '.$this->getLine().'in '.$this->getFile().$this->getMessage().' is number Zero';
	return $errorMsg;
  }
}
function demo($n)
{
try
{
	if($n == 0)
	{
		throw new Exception($n);
	}
}
catch (Exception $e)
{
	echo $e->get_Message();
}
}
demo(7);
demo(0);
?>