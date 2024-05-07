<?php

namespace FabriqueMethod;

interface ProductFactory
{
    public function createProduct(): Product;
}