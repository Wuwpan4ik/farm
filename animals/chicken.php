<?php

    namespace Farmer {

        use Farmer\Animal;

        include_once 'animals\animal.php';
        include_once 'Farm.php';

        class Chicken extends Animal
        {

            public static $name = 'Курица';

            public static $productionName = 'яиц';

            public static $countProductionMin = 0;

            public static $countProductionMax = 1;

        }
    }