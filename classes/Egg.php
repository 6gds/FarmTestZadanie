<?php

require_once ("Product.php");

class Egg extends Product
{
    public static function getMeasure() {
        return "шт";
    }
}