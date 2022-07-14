<?php

    class Farm
    {

        public $animals = [];

        public $productions = [];


        public function getCountAnimals(string $name) {
            return (string) $this->animals[$name];
        }

        public function addAnimals($class, int $count = 1)
        {
            if (gettype($class) === 'object') {

                $kindName = $class->getKindName();
                if (!isset($this->animals[$kindName])) $this->animals[$kindName] = 0;
                $this->animals[$kindName] += $count;
                return True;
            }
            if (!get_class_methods($class)) {
                throw new Exception('Это не класс или объект!');
            };
            if (!isset($this->animals[$class::$kindName])) $this->animals[$class::$kindName] = 0;
            $this->animals[$class::$kindName] += $count;
            return True;
        }


        public function addProduction($class)
        {

            if (!class_exists($class)) {
                throw new Exception('Ошибка в названии класса');
            }

            // Название продукции
            if (!isset($this->productions[$class::$kindName])) $this->productions[$class::$kindName][1] = $class::$productionName;

            //addProduction
            for ($i = 0; $i < $this->getCountAnimals($class::$kindName); $i++) {
                $this->productions[$class::$kindName][0] += ((new $class())->getCountProduction());
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
