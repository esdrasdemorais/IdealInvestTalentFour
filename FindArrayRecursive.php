<?php
class Exercise2
{
	private $umArray;
	private $outroArray;	

	public function __construct()
	{
		$this->umArray = array(array(array(array('Valor Final do Primeiro Array'))));
		$this->outroArray = array(array('Segundo Array Valor Final'));
	}

	private function getValue($value)
	{
		if (false === is_array($value)) {
			return $value;
		}
		return $this->getValue($value[0]);
	}
	
	public function showArrayValues()
	{
		echo "<pre>";
		var_dump($this->getValue($this->umArray));
		echo "<br><br>";
		var_dump($this->getValue($this->outroArray));
	}
}

$ex2 = new Exercise2();
$ex2->showArrayValues();
