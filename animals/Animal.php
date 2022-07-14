<?php
    abstract class Animal
    {

        public function __construct($name = '')
        {
            $this->name = $name;
        }

        public static $kindName;

        public $name;

        public static $productionName;

        public static $countProductionMin;

        public static $countProductionMax;

        public function getCountProduction()
        {
            return rand(self::$countProductionMin, self::$countProductionMax);
        }
    }