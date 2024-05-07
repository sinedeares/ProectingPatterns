<?php

use Composite\ConcreteProduct;
use Composite\ProductCategory;

require_once '../../vendor/autoload.php';

$iphone20 = new ConcreteProduct('IPhone 20', '131fA123', 'Описание айфона 20', 250000);
$playStation5 = new ConcreteProduct('PlayStation 5', '231f1f2', 'Описание PlayStation5', 55000);
$xboxSeriesX = new ConcreteProduct('Xbox Series X', '12f1f', 'Описание Xbox Series X', 45000);

$consoles = new ProductCategory();
$consoles->addProduct($playStation5);
$consoles->addProduct($xboxSeriesX);

echo $consoles->getTitle();
echo $consoles->getArticle();
echo $consoles->getDescription();
echo $consoles->getPrice();
echo $iphone20->getPrice();
echo $xboxSeriesX->getPrice();