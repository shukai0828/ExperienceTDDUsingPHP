<?php
/**
 * Created by PhpStorm.
 * User: zhaoshukai
 * Date: 2017-12-23
 * Time: 12:10
 */
namespace ExperienceTDD;
require_once __DIR__ . '/Discount.php';

class Cart
{
    var $productList;

    function addProduct($product) {
        $this->productList[] = $product;
    }

    function getPrice() {
        $totalPrice = 0;
        foreach($this->productList as $product) {
            $totalPrice += Discount::price($product->getPrice());
        }

        return $totalPrice;
    }
}