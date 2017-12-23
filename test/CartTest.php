<?php
/**
 * Created by PhpStorm.
 * User: zhaoshukai
 * Date: 2017-12-23
 * Time: 12:24
 */
use PHPUnit\Framework\TestCase;

/**
 * Class CartTest
 */
class CartTest extends TestCase
{
    /**
     * 购物车有且仅有一个商品，该商品价格为150，总价为（150 - 50）= 100
     */
    public function testOneItemMoreThanOneHundred() {
        $cart    = new Cart();
        $this->assertEquals(100,$cart->getPrice());
    }
    /**
     * 购物车有且仅有一个商品，该商品价格为100，总价为（100 - 50）= 50
     */
    public function testOneItemEqualToOneHundred() {
        $cart    = new Cart();
        $this->assertEquals(50,$cart->getPrice());
    }
    /**
     * 购物车有且仅有一个商品，该商品价格为80，总价为80
     */
    public function testOneItemLessThanOneHundred() {
        $cart    = new Cart();
        $this->assertEquals(80,$cart->getPrice());
    }
    /**
     * 购物车有三件商品，价格分别是150、100、100，总价为（150 - 50）+（100 - 50）+（100 - 50）= 200
     */
    public function testMutiItemesAllMoreThanOneHundred() {
        $cart    = new Cart();
        $this->assertEquals(200,$cart->getPrice());
    }
    /**
     * 购物车有三件商品，价格分别是150、100、80，总价为（150 - 50）+（100 - 50）+ 80 = 230
     */
    public function testMutiItemesSomeMoreThanOneHundred() {
        $cart    = new Cart();
        $this->assertEquals(230,$cart->getPrice());
    }
    /**
     * 购物车有三件商品，价格分别是90、80、70，总价为 90 + 80 + 70 = 240
     */
    public function testMutiItemesAllLessThanOneHundred() {
        $cart    = new Cart();
        $this->assertEquals(240,$cart->getPrice());
    }
}