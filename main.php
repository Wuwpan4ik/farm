<?php

namespace Farmer {

    include_once 'animals\chicken.php';
    include_once 'animals\cow.php';
    include_once 'Farm.php';

    $chicken = new Chicken();
    $cow = new Cow();
    $farm = new Farm();

    //
    print_r();
    $chicken->addAnimals(20, $farm);
    $cow->addAnimals(10, $farm);
    $farm->printConsoleAnimals();


    //

    for ($i = 1; $i < 8; $i++) {
        $chicken->addProduction($farm);
        $cow->addProduction($farm);
    }
    $farm->printConsoleProduction();

    //


}