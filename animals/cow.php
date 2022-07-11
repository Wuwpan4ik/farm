<?php

    namespace Farmer {

        use Farmer\Animal;

        include_once 'animals\animal.php';
        include_once 'Farm.php';

        class Cow extends Animal
        {

            public $name = 'Корова';

            public $productionName = 'литров молока';

            public $countProductionMin = 8;

            public $countProductionMax = 12;

        }
    }