<?php
require("animal.php");

$dog = new Dog("Violeta", "ViraLata", "17/07/97");
$dog->setOwnerName("Raimundo");

echo("Nome do cachorro: " . $dog->getName() . "<br>");
echo("Data de nascimento: " . $dog->getBornDate() . "<br>");
echo("Último nome: " . $dog->getLastName() . "<br>");
echo("Dono: " . $dog->getOwnerName() . "<br>");
