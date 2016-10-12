<?php
namespace App\Model;

class Hamburger implements FoodItem
{

    public function getDescription()
    {
        return "A hamburger";
    }

    public function getCost()
    {
        return 3.0;
    }

    public function getCalories()
    {
        return 350;
    }
}