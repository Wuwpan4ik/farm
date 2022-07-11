<?php

    namespace Farmer {

        use Farmer\Animal;

        include_once 'animals\animal.php';
        include_once 'Farm.php';

        class Chicken extends Animal
        {

            public $name = 'Курица';

            public $productionName = 'яиц';

            public $countProductionMin = 0;

            public $countProductionMax = 1;

        }
    }