<?php
namespace Model;

class ChickenSandwich implements FoodItem
{

    public function getDescription()
    {
        return "A plain and dry chicken sandwich";
    }

    public function getCost()
    {
        return 4.0;
    }

    public function getCalories()
    {
        return 400;
    }
}