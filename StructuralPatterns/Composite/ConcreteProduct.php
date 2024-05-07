<?php

namespace Composite;

use Composite\Product;


//Класс Leaf
class ConcreteProduct implements Product
{
    private $title;
    private $article;
    private $description;
    private $price;

    public function __construct(string $title, string $article, string $description, float $price)
    {
        $this->title = $title;
        $this->article = $article;
        $this->description = $description;
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getArticle(): string
    {
        return $this->article;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}