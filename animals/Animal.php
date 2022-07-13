<?php
    abstract class Animal
    {
        public static $name;

        public static $productionName;

        public static $countProductionMin;

        public static $countProductionMax;

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }
    }