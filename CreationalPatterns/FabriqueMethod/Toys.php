<?php

namespace FabriqueMethod;


class Toys implements Product
{

    public function getName(): string
    {
        return "Игрушки";
    }

    public function getDescription(): string
    {
        return "Описание игрушек";
    }

    public function getPrice(): string
    {
        return "Цена игрушек";
    }
}