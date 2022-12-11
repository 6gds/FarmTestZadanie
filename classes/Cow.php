<?php

require_once("Animal.php");
require_once("Milk.php");

class Cow extends Animal
{
    protected $minCountProduct = 8;
    protected $maxCountProduct = 12;

    public function __construct(string $uniqCode)
    {
        parent::__construct($uniqCode);
    }

    public function getProduct(): Milk
    {
        return new Milk(rand($this->minCountProduct, $this->maxCountProduct));
    }
}