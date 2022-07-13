<?php

    require 'vendor/autoload.php';

    class Chicken extends Animal
    {

        public static $name = 'Chicken';

        public static $productionName = 'яиц';

        public static $countProductionMin = 0;

        public static $countProductionMax = 1;

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }

    }