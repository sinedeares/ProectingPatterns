<?php

namespace FabriqueMethod;


class ToysFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new Toys();
    }
}