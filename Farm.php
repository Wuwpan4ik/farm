<?php
    namespace Farmer {

        class Farm
        {

            protected $animals = [];

            protected $productions = [];

            protected function getAnimals($name) {
                return $this->animals[$name];
            }

            public function addAnimals($name, $count)
            {
                if (!$this->animals[$name]) {
                    $this->animals[$name] = $count;
                } else {
                    $this->animals[$name] += $count;
                }
            }

            public function addProduction($name, $count, $productionName)
            {
                if (!$this->productions[$name]) {
                    $this->productions[$name] = [$count, $productionName];
                } else {
                    $this->productions[$name][0] += $count;
                }
            }

            public function printConsoleAnimals()
            {
                foreach (array_keys($this->animals) as $animal) {
                    print_r($this->animals[$animal] ." $animal на ферме \n");
                }
            }


            public function printConsoleProduction()
            {
                foreach (array_keys($this->productions) as $production) {
                    print_r($this->productions[$production][0]. ' ' . $this->productions[$production][1]. "  на ферме \n");
                }
            }
        }
    }