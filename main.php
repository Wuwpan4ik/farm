<?php

namespace Farmer {

    include_once 'animals\chicken.php';
    include_once 'animals\cow.php';
    include_once 'Farm.php';

    use Farmer\Chicken as Chicken;
    use Farmer\Farm as Farm;
    use Farmer\Cow as Cow;

    $chicken = new Chicken();
    $cow = new Cow();
    $farm = (new Farm());

    // 1 Задача.

    $chicken->addAnimals(20, $farm);
    $cow->addAnimals(10, $farm);
    $farm->printConsoleAnimals();


    // 2 Задача.

    for ($i = 1; $i < 8; $i++) {
        $chicken->addProduction($farm);
        $cow->addProduction($farm);
    }
    $farm->printConsoleProduction();
}