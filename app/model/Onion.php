<?php
namespace App\Model;

class Onion extends ToppingDecorator
{

    public function __construct(FoodItem $foodItem) {
        $this->foodItem = $foodItem;

        $this->description = "Onion";
        $this->calories = 20;
        $this->cost = .3;
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
