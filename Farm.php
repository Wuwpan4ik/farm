<?php
    namespace Farmer {

        class Farm
        {

            protected $animals = [];

            protected $productions = [];

            protected function addAnimals($name, $count)
            {
                if (!$this->animals[$name]) {
                    $this->animals[$name] = $count;
                } else {
                    $this->animals[$name] += $count;
                }
            }

            protected function addProduction($name, $count)
            {
                if (!$this->productions[$name]) {
                    $this->productions[$name] = $count;
                } else {
                    $this->productions[$name] += $count;
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
                    print_r($this->productions[$production] ." $production  на ферме \n");
                }
            }
        }
    }