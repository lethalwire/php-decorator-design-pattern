<?php
namespace App\Model;

class Tomato extends ToppingDecorator
{

    public function __construct(FoodItem $foodItem) {
        $this->foodItem = $foodItem;

        $this->description = "Tomato";
        $this->calories = 40;
        $this->cost = .5;
    }

    public function getDescription()
    {
        return $this->foodItem->getDescription() . ", Tomato";
    }

    public function getCost()
    {
        return $this->foodItem->getCost() + $this->getCost();
    }

    public function getCalories()
    {
        return $this->foodItem->getCalories() + $this->getCalories();
    }

}
