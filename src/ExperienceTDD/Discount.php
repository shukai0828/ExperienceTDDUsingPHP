<?php
/**
 * Created by PhpStorm.
 * User: zhaoshukai
 * Date: 2017-12-23
 * Time: 12:09
 */
namespace ExperienceTDD;

class Discount
{
    static function price($price) {
        if($price >= 100) {
            $price -= 50;
        }

        return $price;
    }

}