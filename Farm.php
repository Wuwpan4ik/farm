<?php

    require 'vendor/autoload.php';

    class Farm
    {

        public $animals = [];

        public $productions = [];


        public function getCountAnimals(string $name) {
            return (string) $this->animals[$name];
        }


        public function addAnimals(Animal $class, int $count = 1)
        {

            //Извлекаем род животного
            $animal_class = new $class();
            $kindName = $animal_class->getKindName();

            //Добавляем его на ферму
            if (!isset($this->animals[$kindName])) $this->animals[$kindName] = 0;
            $this->animals[$kindName] += $count;
        }


        public function addProduction(Animal $class)
        {

            //Извлекаем род животного
            $animal_class = new $class();
            $kindName = $animal_class->getKindName();

            // Добавляем название продукции
            if (!isset($this->productions[$kindName])) $this->productions[$kindName][1] = $animal_class->getProductionName();

            //Добавляем количество продукции
            for ($i = 0; $i < $this->getCountAnimals($kindName); $i++) {
                $this->productions[$kindName][0] += $animal_class->getCountProduction();
            }
        }


        public function getAllProduction()
        {
            foreach (array_keys($this->animals) as $animal) {
                $this->addProduction(new $animal());
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
