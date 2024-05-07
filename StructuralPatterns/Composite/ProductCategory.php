<?php

namespace Composite;

use Composite\Product;

//Класс Composite
class ProductCategory implements Product
{

    private $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
    public function removeProduct(Product $product): void
    {
        foreach ($this->products as $index => $child) {
            if ($child === $product) {
                unset($this->products[$index]);
                break;
            }
        }
    }
    public function getProducts(): array
    {
        return $this->products;
    }
    public function getTitle(): string
    {
        if (empty($this->products)) {
            return '';
        } else {
            $titles = array_map(function (Product $product) {
                return $product->getTitle();
            }, $this->products);
            return implode(', ', $titles);
        }
    }
    public function getArticle(): string
    {
        if(empty($this->products)){
            return '';
        } else{
            $articles = array_map(function(Product $product){
                return $product->getArticle();
            }, $this->products);
            return implode(', ', $articles);
        }
    }
    public function getDescription(): string
    {
        if (empty($this->products)) {
            return '';
        } else {
            $descriptions = array_map(function (Product $product) {
                return $product->getDescription();
            }, $this->products);
            return implode(' ', $descriptions);
        }
    }
    public function getPrice():float
    {
        if (empty($this->products)) {
            return 0;
        } else {
            $prices = array_map(function (Product $product) {
                return $product->getPrice();
            }, $this->products);
            return array_sum($prices);
        }
    }
}