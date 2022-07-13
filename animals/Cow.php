<?php

    require 'vendor/autoload.php';

    class Cow extends Animal
    {

        public static $name = 'Cow';

        public static $productionName = 'литров молока';

        public static $countProductionMin = 8;

        public static $countProductionMax = 12;

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }

    }