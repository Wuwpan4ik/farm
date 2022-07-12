<?php

    include_once 'animals\Chicken.php';
    include_once 'animals\Cow.php';
    include_once 'Farm.php';

    $farm = new Farm();
    $cow = new Cow();
    $chicken = new Chicken();


    $farm->addAnimals(20, Chicken::class);
    $farm->addAnimals(10, Cow::class);
    $farm->printConsoleAnimals();




    for ($i = 1; $i < 8; $i++) {
        $farm->addProduction(Chicken::class);
        $farm->addProduction(Cow::class);
    }
    $farm->printConsoleProduction();

    $farm->addAnimals(5, Chicken::class);
    $farm->addAnimals(1, Cow::class);
    $farm->printConsoleAnimals();

    for ($i = 1; $i < 8; $i++) {
        $farm->addProduction(Chicken::class);
        $farm->addProduction(Cow::class);
    }
    $farm->printConsoleProduction();

    print_r("\n");
    print_r("Собрали со всех животных: \n");
    $farm->getAllProduction();
    $farm->printConsoleProduction();

    print_r("\n");
    print_r("Собрали с каждого: \n");
    $cow->getProduction($farm);
    $chicken->getProduction($farm);

    $farm->printConsoleProduction();