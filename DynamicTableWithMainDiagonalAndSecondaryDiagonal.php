<?php
class Exercicio5
{
	private $n;
	private $table = array(array());
	private static $center = "OK";

	public function Exercicio5()
	{
		$this->n = ((int)$_GET["valor"] % 2 !== 0) ? $_GET["valor"] : "Informe um valor ímpar!";
		if (!is_numeric($this->n)) {
			echo "<h3>" . $this->n . "</h3>";
			return;
		}
		$this->primaryDiagonal();
		$this->secundaryDiagonal();
		$this->setCenter();
	}

	private function primaryDiagonal()
	{
		for ($i = 0; $i < $this->n; $i++) {
			for ($j = 0; $j < $this->n; $j++) {
				if ($i === $j) {
					$this->table[$i][$j] = "1";
				}
			}
		}
	}

	private function secundaryDiagonal()
	{
		for ($i = 0; $i < $this->n; $i++) {
			for ($j = 0; $j <= $this->n; $j++) {
				if (($j === (($this->n - 1) - $i))) {
					$this->table[$i][$j] = "0";
				}
			}
		}
	}

	private function setCenter()
	{
		for ($i = 0; $i < $this->n; $i++) {
			for ($j = 0; $j < $this->n; $j++) {
				$isCenter = ((int)($this->n / 2));
				if ($i === $isCenter && $j === $isCenter) {
					$this->table[$i][$j] = static::$center;
				}
			}
		}
	}

	public function generateTable()
	{
		echo "<table border=\"1\">";
		for ($i = 0; $i < $this->n; $i++) {
			echo "<tr>";
			for ($j = 0; $j < $this->n; $j++) {
				echo("<td style=\"width:25px;text-align:center;\">" . $this->table[$i][$j] . "</td>");
			}
			echo "</tr>";
		}
		echo "</table>";
	}
}

$ex5 = new Exercicio5();
$ex5->generateTable();
