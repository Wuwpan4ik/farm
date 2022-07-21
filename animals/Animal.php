<?php

    require 'vendor/autoload.php';

    abstract class Animal implements AnimalsInterface
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
    }