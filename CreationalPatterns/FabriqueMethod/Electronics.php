<?php

namespace FabriqueMethod;


class Electronics implements Product
{

    public function getName(): string
    {
        return "Электроника";
    }

    public function getDescription(): string
    {
        return "Описание электроники";
    }

    public function getPrice(): string
    {
        return "Цена электроники";
    }
}