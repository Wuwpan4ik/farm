<?php

    require 'vendor/autoload.php';

    class Cow extends Animal
    {

        public static $name = 'Cow';

        public static $productionName = 'литров молока';

        public static $countProductionMin = 8;

        public static $countProductionMax = 12;

        public function getProduction(Object $farm)
        {
            if (!isset($farm->productions[self::$name])) $farm->productions[self::$name][1] = self::$productionName;

            for ($i = 0; $i < $farm->animals[self::$name]; $i++) {
                $farm->productions[self::$name][0] += rand(self::$countProductionMin, self::$countProductionMax);
            }
        }

    }