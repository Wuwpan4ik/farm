<?php

    namespace Farmer {

        use Farmer\Animal;

        include_once 'animals\animal.php';
        include_once 'Farm.php';

        class Cow extends Animal
        {

            public static $name = 'Корова';

            public static $productionName = 'литров молока';

            public static $countProductionMin = 8;

            public static $countProductionMax = 12;
        }
    }