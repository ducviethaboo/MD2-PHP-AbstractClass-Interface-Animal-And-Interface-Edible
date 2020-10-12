<?php
include_once 'Animal.php';
include_once 'Edible.php';

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        echo "Con ga keu Cuc tac'";
    }

    public function howtoEat()
    {
        echo "Ran' mot con ga";
    }
}
