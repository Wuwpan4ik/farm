<?php

    require 'vendor/autoload.php';

    class Cow extends Animal
    {

        public $name;

        public static $kindName = 'Cow';

        public static $productionName = 'литров молока';

        public static $countProductionMin = 8;

        public static $countProductionMax = 12;

        public function getProductionName()
        {
            return self::$productionName;
        }

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }

        public function getKindName()
        {
            return self::$kindName;
        }

    }