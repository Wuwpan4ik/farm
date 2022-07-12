<?php
    require 'vendor/autoload.php';
    class Farm
    {

        public $animals = [];

        public $productions = [];


        public function getAnimals(string $name) {
            return (string) $this->animals[$name];
        }

        public function addAnimals(int $count, $class)
        {
            if (!isset($this->animals[$class::$name])) $this->animals[$class::$name] = 0;
            $this->animals[$class::$name] += $count;
        }


        public function addProduction($class)
        {
            // Название продукции
            if (!isset($this->productions[$class::$name])) $this->productions[$class::$name][1] = $class::$productionName;

            //addProduction
            for ($i = 0; $i < $this->getAnimals($class::$name); $i++) {
                $this->productions[$class::$name][0] += rand($class::$countProductionMin, $class::$countProductionMax);
            }
        }

        public function getAllProduction()
        {
            foreach (array_keys($this->animals) as $animal) {
                $this->addProduction((new $animal())->getClass());
            }
        }

        /**
         * $this->animals[$animal] - Количество
         * $animal - Название
         */
        public function printConsoleAnimals()
        {
            foreach (array_keys($this->animals) as $animal) {
                print_r($this->animals[$animal]. ' ' . $animal. " на ферме \n");
            }
        }


        /**
         * $this->productions[$production][0] - Количество
         * $this->productions[$production][1] - Название
         */
        public function printConsoleProduction()
        {
            foreach (array_keys($this->productions) as $production) {
                print_r($this->productions[$production][0]. ' ' . $this->productions[$production][1]. " на ферме \n");
            }
        }

    }
