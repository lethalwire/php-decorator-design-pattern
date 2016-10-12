<?php
namespace App\Model;

class Pickles extends ToppingDecorator
{

    public function __construct(FoodItem $foodItem) {
        $this->foodItem = $foodItem;

        $this->description = "Pickles";
        $this->calories = 25;
        $this->cost = .3;
    }

    public function getDescription()
    {
        return $this->foodItem->getDescription() . ", Pickles";
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
