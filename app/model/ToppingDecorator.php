<?php
namespace App\Model;

abstract class ToppingDecorator implements FoodItem
{
    protected $description;

    protected $cost;

    protected $calories;

    protected $foodItem;

    /**
     * @return string
     */
    public abstract function getDescription();

    /**
     * @return double
     */
    public abstract function getCost();

    /**
     * @return double
     */
    public abstract function getCalories();
}