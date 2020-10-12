<?php
include_once(dirname(__FILE__) . '/../AnimalandFruit/Animal/Animal.php');
include_once 'Edible.php';
include_once(dirname(__FILE__) . '/../AnimalandFruit/Animal/Chicken.php');
include_once(dirname(__FILE__) . '/../AnimalandFruit/Fruit/Fruit.php');
include_once(dirname(__FILE__) . '/../AnimalandFruit/Fruit/Orange.php');
include_once(dirname(__FILE__) . '/../AnimalandFruit/Fruit/Apple.php');
include_once(dirname(__FILE__) . '/../AnimalandFruit/Animal/Tiger.php');

$ckicken = new Chicken();
$ckicken->howtoEat();
echo "<br>";
$ckicken->makeSound();
echo "<br>";
$tiger = new Tiger();
$tiger->makeSound();
echo "<br>";
$apple = new Apple();
$apple->howtoEat();
echo "<br>";
$orange = new Orange();
$orange->howtoEat();

