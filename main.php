<?php

    include_once 'animals\Chicken.php';
    include_once 'animals\Cow.php';
    include_once 'Farm.php';

    $farm = new Farm();
    $cow = new Cow();
    $chicken = new Chicken();


    $farm->addAnimals($chicken, 20);
    $farm->addAnimals($cow, 10);
    $farm->printConsoleAnimals();




    for ($i = 1; $i < 8; $i++) {
        $farm->addProduction($chicken);
        $farm->addProduction($cow);
    }
    $farm->printConsoleProduction();

    $farm->addAnimals($chicken, 5);
    $farm->addAnimals($cow, 1);
    $farm->printConsoleAnimals();

    for ($i = 1; $i < 8; $i++) {
        $farm->addProduction($chicken);
        $farm->addProduction($cow);
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