<?php

    require 'vendor/autoload.php';

    class Cow extends Animal
    {

        public static $name = 'Cow';

        public static $productionName = 'литров молока';

        public static $countProductionMin = 8;

        public static $countProductionMax = 12;

        public function getPersonalProduction($farm)
        {
            if (!isset($farm->productions[$this->name])) $farm->productions[$this->name][1] = self::$productionName;

            for ($i = 0; $i < $farm->animals[$this->name]; $i++) {
                $farm->productions[$this->name][0] += rand(self::$countProductionMin, self::$countProductionMax);
            }
        }

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }

    }