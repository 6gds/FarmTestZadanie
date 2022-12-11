<?php

require_once ("Product.php");

class Milk extends Product
{
    public static function getMeasure() {
        return "л";
    }
}