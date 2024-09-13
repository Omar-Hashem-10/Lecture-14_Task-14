<?php

require_once "Animal.php";
require_once "Pet.php";
require_once "Sea_animal.php";
require_once "Wild_animal.php";

$pet = new Pet("Dog", 3, "Omar",true);
echo $pet->eat();
echo $pet->sleep();
echo $pet->play();

echo "<hr>";

$wildAnimal = new Wild_animal("Lion", 5,"Forests");
echo $wildAnimal->eat();
echo $wildAnimal->sleep();
echo $wildAnimal->hunt();

echo "<hr>";

$seaAnimal = new Sea_animal("Dolphin", 8, "Salt");
echo $seaAnimal->eat();
echo $seaAnimal->sleep();
echo $seaAnimal->swim();
