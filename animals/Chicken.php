<?php

    require 'vendor/autoload.php';

    class Chicken extends Animal
    {

        public static $name = 'Chicken';

        public static $productionName = 'яиц';

        public static $countProductionMin = 0;

        public static $countProductionMax = 1;

        public function getProduction(Object $farm)
        {
            if (!isset($farm->productions[self::$name])) $farm->productions[self::$name][1] = self::$productionName;

            for ($i = 0; $i < $farm->animals[self::$name]; $i++) {
                $farm->productions[self::$name][0] += rand(self::$countProductionMin, self::$countProductionMax);
            }
        }

    }