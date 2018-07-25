<?php
class Exercicio4
{
	private $a;
	private $b;
	private $c;

	public function Exercicio4()
	{
		$this->a = "a) Para criar um modelo de um determinado objeto do mundo real ou abstrato.<br><br>";
		$this->b = "b) private: métodos, atributos e propriedades são acessíveis apenas no escopo de sua classe.<br>";
		$this->b.= "protected: métodos, atributos e propriedades são acessíveis apenas no escopo do pacote em que a classe pertence, ou por herança.<br>";
		$this->b.= "public: métodos, atributos e propriedades são acessíveis em qualquer escopo<br><br>";

		$this->c = "c) São ações ou operações que o objeto possui. Ex.: Objeto: Pessoa, métodos: CAMINHAR, FALAR e COMER.";

		echo "<pre>";
		print($this->a);
		print($this->b);
		print($this->c);
	}
}

$ex4 = new Exercicio4();
