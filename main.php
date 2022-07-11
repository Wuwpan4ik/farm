<?php

namespace Farmer {

    include_once 'animals\chicken.php';
    include_once 'animals\cow.php';
    include_once 'Farm.php';

    $farm = new Farm();


    $farm->addAnimals(20, Chicken::class);
    $farm->addAnimals(10, Cow::class);
    $farm->printConsoleAnimals();




    for ($i = 1; $i < 8; $i++) {
        $farm->addProduction(Chicken::class);
        $farm->addProduction(Cow::class);
    }
    $farm->printConsoleProduction();




}