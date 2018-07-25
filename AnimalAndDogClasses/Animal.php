<?php
class Animal
{
	private $lastName;
	private $bornDate;
}

class Dog extends Animal
{
	protected $name;
	public $ownerName;

	public function Dog($name, $lastName, $bornDate)
	{
		$this->name = $name;
		$this->lastName = $lastName;
		$this->bornDate = $bornDate;
	}

	public function setOwnerName($ownerName)
	{
		$this->ownerName = $ownerName;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getOwnerName()
	{
		return $this->ownerName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getBornDate()
	{
		return $this->bornDate;
	}
}
