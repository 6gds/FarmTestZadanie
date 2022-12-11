<?php

abstract class Product
{
    protected int $count;

    public function __construct($count)
    {
        $this->count = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    abstract public static function getMeasure();
}