<?php

namespace FabriqueMethod;


class ElectronicsFactory implements ProductFactory
{
    public function createProduct(): Product
    {
        return new Electronics();
    }
}