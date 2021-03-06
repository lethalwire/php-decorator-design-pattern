<?php
namespace App\Model;

class Lettuce extends ToppingDecorator
{

    /**
     * Lettuce constructor.
     * @param FoodItem $foodItem
     */
    public function __construct(FoodItem $foodItem) {
        $this->foodItem = $foodItem;

        $this->description = "Lettuce";
        $this->calories = 30;
        $this->cost = .5;
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
