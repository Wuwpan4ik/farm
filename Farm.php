<?php
    namespace Farmer {

        class Farm
        {

            protected $animals = [];

            protected $productions = [];

            protected function getAnimals($name) {
                return $this->animals[$name];
            }

            public function addAnimals($count, $class)
            {
                if (!empty($this->animals[$class::$name])) {
                    $this->animals[$class::$name] = 0;
                } else {
                    $this->animals[$class::$name] += $count;
                }
            }

            public function addProduction($class)
            {
                // Название продукции
                $this->productions[$class::$name][1] = $class::$productionName;

                //addProduction
                for ($i = 0; $i < $this->getAnimals($class::$name); $i++) {
                    $this->productions[$class::$name][0] += rand($class::$countProductionMin, $class::$countProductionMax);
                }
            }

            public function printConsoleAnimals()
            {
                // $this->animals[$animal] - Количество
                // $this->animals[$animal] - Название
                foreach (array_keys($this->animals) as $animal) {
                    print_r($this->animals[$animal]. ' ' . $this->animals[$animal][1]. "  на ферме \n");
                }
            }


            public function printConsoleProduction()
            {
                // $this->productions[$production][0] - Количество
                // $this->productions[$production][1] - Название
                foreach (array_keys($this->productions) as $production) {
                    print_r($this->productions[$production][0]. ' ' . $this->productions[$production][1]. " на ферме \n");
                }
            }
        }
    }
