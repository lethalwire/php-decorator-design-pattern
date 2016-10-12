<?php
namespace App\Model;

interface FoodItem
{
    public function getDescription();

    public function getCost();

    public function getCalories();

}
