<?php

    class Farm
    {

        public $animals = [];

        public $productions = [];


        public function getCountAnimals(string $name) {
            return (string) $this->animals[$name];
        }

        public function addAnimals(int $count, $class)
        {
            if (!class_exists($class)) {
                throw new Exception('Ошибка в названии класса');
            }
            if (!isset($this->animals[$class::$name])) $this->animals[$class::$name] = 0;
            $this->animals[$class::$name] += $count;
            return True;
        }


        public function addProduction($class)
        {
            if (!class_exists($class)) {
                throw new Exception('Ошибка в названии класса');
            }

            // Название продукции
            if (!isset($this->productions[$class::$name])) $this->productions[$class::$name][1] = $class::$productionName;

            //addProduction
            for ($i = 0; $i < $this->getCountAnimals($class::$name); $i++) {
                $this->productions[$class::$name][0] += ((new $class())->getCountProduction());
            }
        }


        public function getAllProduction()
        {
            foreach (array_keys($this->animals) as $animal) {
                $this->addProduction(get_class(new $animal()));
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
