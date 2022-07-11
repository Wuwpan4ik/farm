<?php

    namespace Farmer {

        use Farmer\Animal;

        include_once 'animals\animal.php';
        include_once 'Farm.php';


        class Cow implements Animal {

            protected $name = 'Корова';

            public function addProduction($farm)
            {
                $farm->addProduction($this->name, rand(8, 12));
            }

            public function addAnimals($count, $farm)
            {
                $farm->addAnimals($this->name, $count);
            }
        }
    }