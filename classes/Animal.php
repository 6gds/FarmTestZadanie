<?php

require_once ("Product.php");

abstract class Animal {
    protected Product $product;
    protected string $uniqCode;
    protected $minCountProduct;
    protected $maxCountProduct;

    public function __construct(string $uniqCode)
    {
        $this->uniqCode = __CLASS__."_".$uniqCode;
    }

    abstract public function getProduct(): Product;
}