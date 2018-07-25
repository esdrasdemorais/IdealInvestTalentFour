<?php
class Exercise3
{
	private $n;

	public function Exercise3()
	{
		$this->n = is_numeric($_GET['numero']) ? $_GET['numero'] : "Informe um número!";
	}

	public function getPairOrImpar()
	{
		if (!is_numeric($this->n)) return $this->n;

		if (0 === $this->n % 2)
			return "par";
		else
			return "impar";
	}
}

$ex3 = new Exercise3();
echo "<pre>";
echo $ex3->getPairOrImpar();
