<?php

use FabriqueMethod\ClothesFactory;
use FabriqueMethod\ElectronicsFactory;
use FabriqueMethod\ToysFactory;

require_once '../../vendor/autoload.php';

function getProduct($category) {
    switch ($category) {
        case 'clothes':
            $factory = new ClothesFactory();
            break;
        case 'electronics':
            $factory = new ElectronicsFactory();
            break;
        case 'toys':
            $factory = new ToysFactory();
            break;
    }

    return $factory->createProduct();
}

$product = getProduct('clothes');
echo 'Название товара: ' . $product->getName() . PHP_EOL;
echo 'Описание товара: ' . $product->getDescription() . PHP_EOL;
echo 'Цена товара: ' . $product->getPrice() . PHP_EOL;