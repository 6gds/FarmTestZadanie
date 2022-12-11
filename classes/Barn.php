<?php
declare(strict_types = 1);

require_once ('Animal.php');

class Barn
{
    public array $animals = [];
    public array $products = [];

    public function addAnimal (Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function getCountAnimals(): array
    {
        $countAnimals = [];

        foreach ($this->animals as $animal)
        {
            if (!isset($countAnimals[get_class($animal)])) {
                $countAnimals[get_class($animal)] = 1;
            } else {
                $countAnimals[get_class($animal)] += 1;
            }
        }

        return $countAnimals;
    }

    public function collectProducts(): void
    {
        foreach ($this->animals as $animal) {
            $product = $animal->getProduct();

            if (!isset($this->products[get_class($product)])) {
                $this->products[get_class($product)] = [
                    "count" => $product->getCount(),
                    "measure" => $product->getMeasure()
                ];
            } else {
                $this->products[get_class($product)]["count"] += $product->getCount();
            }
        }
    }

    function outInfoAboutProducts(): void
    {
        $collectedProducts = $this->getCollectedProducts();

        foreach ($collectedProducts as $nameAnimal => $countProduct) {
            echo $nameAnimal . " - " . $countProduct["count"].$countProduct["measure"];
            echo "<br/>";
        }
    }

    function outInfoAboutAnimals(): void
    {
        $countAnimals = $this->getCountAnimals();

        foreach ($countAnimals as $nameAnimal => $countAnimal) {
            echo $nameAnimal . " - " . $countAnimal;
            echo "<br/>";
        }
    }


    public function getCollectedProducts(): array
    {
        return $this->products;
    }
}