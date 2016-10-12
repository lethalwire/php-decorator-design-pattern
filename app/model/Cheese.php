<?php
namespace App\Model;

class Cheese extends ToppingDecorator
{

    public function __construct(FoodItem $foodItem) {
        $this->foodItem = $foodItem;

        $this->description = "Onion";
        $this->calories = 70;
        $this->cost = .6;
    }

    public function getDescription()
    {
        return $this->foodItem->getDescription() . ", " . $this->description;
    }

    public function getCost()
    {
        return $this->foodItem->getCost() + $this->cost;
    }

    public function getCalories()
    {
        return $this->foodItem->getCalories() + $this->calories;
    }

}
