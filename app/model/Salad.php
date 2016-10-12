<?php
namespace App\Model;

class Salad implements FoodItem
{

    public function getDescription()
    {
        return "A plain and dry salad";
    }

    public function getCost()
    {
        return 5.0;
    }

    public function getCalories()
    {
        return 150;
    }
}