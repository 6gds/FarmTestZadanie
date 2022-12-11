<?php

require_once ("classes/Cow.php");
require_once ("classes/Chicken.php");
require_once ("classes/Barn.php");

function WeekCollect(Barn $barn): void
{
    for ($i = 0; $i < 7; $i++) {
        $barn->collectProducts();
    }
}

function outInfoAboutProducts(Barn $barn): void
{
    $collectedProducts = $barn->getCollectedProducts();

    foreach ($collectedProducts as $nameAnimal => $countProduct) {
        echo $nameAnimal . " - " . $countProduct["count"].$countProduct["measure"];
        echo "<br/>";
    }
}

function outInfoAboutAnimals(Barn $barn): void
{
    $countAnimals = $barn->getCountAnimals();

    foreach ($countAnimals as $nameAnimal => $countAnimal) {
        echo $nameAnimal . " - " . $countAnimal;
        echo "<br/>";
    }
}

function addAnimalsToFarm(Barn $barn, int $countCow, int $countChiken): void
{
    for ($i = 0; $i < $countCow; $i++) {
        $barn->addAnimal(new Cow(uniqid()));
    }

    for ($i = 0; $i < $countChiken; $i++) {
        $barn->addAnimal(new Chicken(uniqid()));
    }
}

$barn = new Barn();
addAnimalsToFarm($barn, 10, 20);
$barn->outInfoAboutAnimals();
WeekCollect($barn);
$barn->outInfoAboutProducts();
addAnimalsToFarm($barn, 1, 5);
$barn->outInfoAboutAnimals();
WeekCollect($barn);
$barn->outInfoAboutProducts();
