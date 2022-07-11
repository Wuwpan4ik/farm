<?php

    namespace Farmer {

        use Farmer\Animal;

        include_once 'animals\animal.php';
        include_once 'Farm.php';

        class Chicken implements Animal
        {

            protected $name = 'Курица';

            public function addProduction($farm)
            {
                $farm->addProduction($this->name, rand(0, 1));
            }

            public function addAnimals($count, $farm)
            {
                $farm->addAnimals($this->name, $count);
            }
        }
    }