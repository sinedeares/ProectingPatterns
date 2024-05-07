<?php

namespace Flyweight;

require_once '../../vendor/autoload.php';

$factory = new ProductFactory();

$product1 = $factory->getProduct("Молоко", 80);
echo "Цена молока: руб" . $product1->getPrice() . "\n";

$product2 = $factory->getProduct("Хлеб", 20); // Разные объекты
echo "Цена хлеба: руб" . $product2->getPrice() . "\n";

$product3 = $factory->getProduct("Молоко", 80); // Получаем тот же самый объект, что и первый, так как уже существует
echo "Цена молока: руб" . $product3->getPrice() . "\n";