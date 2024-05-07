<?php

namespace Decorator;

require_once '../../vendor/autoload.php';


$flower = new BasicFlowers();
echo "Базовый класс: " . $flower->getDescription() . "\n";

// Добавление подарочной упаковки
$giftWrappedProduct = new FlowersWithGiftWrap($flower);
echo "Класс с подарочной обёрткой: " . $giftWrappedProduct->getDescription() . "\n";

// Добавление поздравительной открытки
$productWithCard = new FlowersWithGreetingCard($flower);
echo "Класс с открыткой: " . $productWithCard->getDescription() . "\n";

// Комбинация декораторов
$giftWrappedProductWithCard = new FlowersWithGreetingCard($giftWrappedProduct);
echo "Класс с подарочной обёрткой и октрыткой: " . $giftWrappedProductWithCard->getDescription() . "\n";