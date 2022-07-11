<?php
    namespace Farmer {
        interface Animal
        {

            public function addProduction($farm);

            public function addAnimals($count, $farm);

        }
    }