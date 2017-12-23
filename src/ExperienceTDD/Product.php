<?php
/**
 * Created by PhpStorm.
 * User: zhaoshukai
 * Date: 2017-12-23
 * Time: 12:08
 */
namespace ExperienceTDD;

class Product
{
    var $price;

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}