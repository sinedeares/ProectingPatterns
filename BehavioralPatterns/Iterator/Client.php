<?php

namespace Iterator;

require_once '../../vendor/autoload.php';

$itemCollection = new ItemIterator();
$itemCollection->addItem(new Item('Item 1'));
$itemCollection->addItem(new Item('Item 2'));
$itemCollection->addItem(new Item('Item 3'));

// Используем итератор для перебора коллекции
foreach ($itemCollection as $item) {
    echo $item->getName() . "\n";
}

$itemCollection->rewind();
echo "Current item after rewind: " . $itemCollection->current()->getName() . "\n";

$currentItem = $itemCollection->current();
echo "Current item: " . $currentItem->getName() . "\n";

$currentKey = $itemCollection->key();
echo "Current key: " . $currentKey . "\n";

$itemCollection->next();

$isValid = $itemCollection->valid();
echo "Is current position valid? " . ($isValid ? 'Yes' : 'No') . "\n";