<?php

namespace FabriqueMethod;


class ClothesFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new Clothes();
    }
}