<?php

require_once("Animal.php");
require_once("Egg.php");

class Chicken extends Animal
{
    protected $minCountProduct = 0;
    protected $maxCountProduct = 1;

    public function __construct(string $uniqCode)
    {
        parent::__construct($uniqCode);
    }

    public function getProduct(): Egg
    {
        return new Egg(rand($this->minCountProduct, $this->maxCountProduct));
    }
}