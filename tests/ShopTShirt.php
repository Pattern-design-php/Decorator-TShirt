<?php 
require __DIR__ . '/../autoload.php';

use TShirt\SimpleTShirt;
use TShirt\Discount;
use TShirt\LouisVuittonTShirt;

$tShirt = new SimpleTShirt();
echo "Simple T-Shirt" . PHP_EOL;
echo "Color: " . $tShirt->color() . PHP_EOL;
echo "Size: " . $tShirt->size() . PHP_EOL;
echo "Cost: " . $tShirt->cost() . PHP_EOL;

echo "=====================" . PHP_EOL;
$louisVuittonTShirt = new LouisVuittonTShirt(new SimpleTShirt());
echo "Louis Vuitton T-Shirt" . PHP_EOL;
echo "Color: " . $louisVuittonTShirt->color() . PHP_EOL;
echo "Size: " . $louisVuittonTShirt->size() . PHP_EOL;
echo "Cost: " . $louisVuittonTShirt->cost() . PHP_EOL;

echo "========================".PHP_EOL;
$louisVuittonTShirtDiscount = new Discount($louisVuittonTShirt);
echo "Louis Vuitton T-Shirt with discount" . PHP_EOL;
echo "Color: " . $louisVuittonTShirtDiscount->color() . PHP_EOL;
echo "Size: " . $louisVuittonTShirtDiscount->size() . PHP_EOL;
echo "Cost: " . $louisVuittonTShirtDiscount->cost() . PHP_EOL;