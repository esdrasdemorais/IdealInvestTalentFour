<?php
class Exercise1
{
        private $array = array(0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);

        private function setPosArray(int $pos, int $value)
        {
                $this->array[$pos] = $value;
        }

        private function populateArray(int $n = 7)
        {
                if ($n > 7) return false;
                for ($i = 0; $i < $n; $i++) {
                        $value = mt_rand(1, 15);
                        while (true === in_array($value, $this->array)) {
                                $value = mt_rand(1, 15);
                        }
                        $this->setPosArray($i, $value);			
                }
       }

        private function sortArray()
        {
		sort($this->array);
        }

        public function __construct()
        {
                $this->populateArray();
		$this->sortArray();
        }

	public function getArray()
	{
		return $this->array;
	}
}

$ex1 = new Exercise1();
echo "<pre>";
var_dump($ex1->getArray());

