<?php
/**
 * Created by PhpStorm.
 * User: zhaoshukai
 * Date: 2017-12-23
 * Time: 12:24
 */
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/ExperienceTDD/Product.php';
require_once __DIR__.'/../src/ExperienceTDD/Cart.php';

/**
 * Class CartTest
 */
class CartTest extends TestCase
{
    /**
     * 购物车有且仅有一个商品，该商品价格为150，总价为（150 - 50）= 100
     */
    public function testOneItemMoreThanOneHundred() {
        $product = new \ExperienceTDD\Product();
        $cart    = new \ExperienceTDD\Cart();

        $product->setPrice(150);
        $cart->addProduct($product);

        $this->assertEquals(100,$cart->getPrice());
    }
    /**
     * 购物车有且仅有一个商品，该商品价格为100，总价为（100 - 50）= 50
     */
    public function testOneItemEqualToOneHundred() {
        $product = new \ExperienceTDD\Product();
        $cart    = new \ExperienceTDD\Cart();

        $product->setPrice(100);
        $cart->addProduct($product);

        $this->assertEquals(50,$cart->getPrice());
    }
    /**
     * 购物车有且仅有一个商品，该商品价格为80，总价为80
     */
    public function testOneItemLessThanOneHundred() {
        $product = new \ExperienceTDD\Product();
        $cart    = new \ExperienceTDD\Cart();

        $product->setPrice(80);
        $cart->addProduct($product);

        $this->assertEquals(80,$cart->getPrice());
    }
    /**
     * 购物车有三件商品，价格分别是150、100、100，总价为（150 - 50）+（100 - 50）+（100 - 50）= 200
     */
    public function testMutiItemesAllMoreThanOneHundred() {
        $product  = new \ExperienceTDD\Product();
        $product2 = new \ExperienceTDD\Product();
        $product3 = new \ExperienceTDD\Product();
        $cart     = new \ExperienceTDD\Cart();

        $product->setPrice(150);
        $product2->setPrice(100);
        $product3->setPrice(100);
        $cart->addProduct($product);
        $cart->addProduct($product2);
        $cart->addProduct($product3);

        $this->assertEquals(200,$cart->getPrice());
    }
    /**
     * 购物车有三件商品，价格分别是150、100、80，总价为（150 - 50）+（100 - 50）+ 80 = 230
     */
    public function testMutiItemesSomeMoreThanOneHundred() {
        $product  = new \ExperienceTDD\Product();
        $product2 = new \ExperienceTDD\Product();
        $product3 = new \ExperienceTDD\Product();
        $cart     = new \ExperienceTDD\Cart();

        $product->setPrice(150);
        $product2->setPrice(100);
        $product3->setPrice(80);
        $cart->addProduct($product);
        $cart->addProduct($product2);
        $cart->addProduct($product3);

        $this->assertEquals(230,$cart->getPrice());
    }
    /**
     * 购物车有三件商品，价格分别是90、80、70，总价为 90 + 80 + 70 = 240
     */
    public function testMutiItemesAllLessThanOneHundred() {
        $product  = new \ExperienceTDD\Product();
        $product2 = new \ExperienceTDD\Product();
        $product3 = new \ExperienceTDD\Product();
        $cart     = new \ExperienceTDD\Cart();

        $product->setPrice(90);
        $product2->setPrice(80);
        $product3->setPrice(70);
        $cart->addProduct($product);
        $cart->addProduct($product2);
        $cart->addProduct($product3);

        $this->assertEquals(240,$cart->getPrice());
    }
}