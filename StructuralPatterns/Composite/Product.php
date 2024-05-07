<?php

namespace Composite;

//Компонент
interface Product
{
    public function getTitle();
    public function getArticle();
    public function getDescription();
    public function getPrice();
}