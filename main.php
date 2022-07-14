<?php

    include_once 'animals\Chicken.php';
    include_once 'animals\Cow.php';
    include_once 'Farm.php';

    $farm = new Farm();
    $cow = new Cow();
    $chicken = new Chicken();



    $farm->addAnimals(Chicken::class, 20);
    $farm->addAnimals(Cow::class, 10);
    $farm->printConsoleAnimals();




    for ($i = 1; $i < 8; $i++) {
        $farm->addProduction(Chicken::class);
        $farm->addProduction(Cow::class);
    }
    $farm->printConsoleProduction();

    $farm->addAnimals(Chicken::class, 5);
    $farm->addAnimals(Cow::class, 1);
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

    $burionka = new Cow('Бурёнка');

    $farm->addAnimals($burionka);

    print_r("\n");
    print_r("Добвили 'Бурёнку': \n");

    $farm->printConsoleAnimals();

    $farm->printConsoleProduction();