<?php

namespace FabriqueMethod;


class Clothes implements Product
{

    public function getName(): string
    {
        return "Одежда";
    }

    public function getDescription(): string
    {
        return "Описание одежды";
    }

    public function getPrice(): string
    {
        return "Цена одежды";
    }
}