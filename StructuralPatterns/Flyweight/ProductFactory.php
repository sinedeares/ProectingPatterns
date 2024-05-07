<?php

namespace Flyweight;

class ProductFactory
{
    private $products = [];

    public function getProduct($name, $price) {
        if (!isset($this->products[$name])) {
            $this->products[$name] = new ConcreteProduct($name, $price);
        }
        return $this->products[$name];
    }
}