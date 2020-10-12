<?php
include_once 'Edible.php';

abstract class Fruit implements Edible
{
    abstract public function howtoEat();
}