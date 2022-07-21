<?php

    require 'vendor/autoload.php';

    class Chicken extends Animal
    {
        public $name;

        public static $kindName = 'Chicken';

        public static $productionName = 'яиц';

        public static $countProductionMin = 0;

        public static $countProductionMax = 1;

        public function getProductionName()
        {
            return self::$productionName;
        }

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }

        public function getAnimalKindName()
        {
            return self::$kindName;
        }

    }