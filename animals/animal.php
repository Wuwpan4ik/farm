<?php
    namespace Farmer {
        abstract class Animal
        {

            public $productionName;

            public $name;

            public $countProductionMin;

            public $countProductionMax;

            public function addProduction($farm)
            {
                $farm->addProduction($this->name, rand($this->countProductionMin, $this->countProductionMax), $this->productionName);
            }

            public function addAnimals($count, $farm)
            {
                $farm->addAnimals($this->name, $count);
            }

        }
    }