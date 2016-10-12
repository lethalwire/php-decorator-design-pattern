<?php

namespace App;

use App\Model\Cheese;
use App\Model\Hamburger;
use App\Model\Lettuce;
use App\Model\Onion;
use App\Model\Pickles;
use App\Model\Tomato;

class Demo {

    public function __construct()
    {
        echo 'In Demo <br />';
        $this->run();
    }

    public function run()
    {
        $cheeseBurger = new Hamburger();
        $cheeseBurger = new Cheese($cheeseBurger);
        $cheeseBurger = new Lettuce($cheeseBurger);
        $cheeseBurger = new Tomato($cheeseBurger);
        $cheeseBurger = new Onion($cheeseBurger);
        $cheeseBurger = new Pickles($cheeseBurger);
        
        echo "Cheeseburger : " . $cheeseBurger->getDescription();

        echo "<br />";
        echo "Cost: " . $cheeseBurger->getCost();

        echo "<br />";
        echo "Calories : " . $cheeseBurger->getCalories();
    }
}