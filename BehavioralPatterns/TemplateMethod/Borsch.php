<?php

namespace TemplateMethod;

use TemplateMethod\Recipe;

class Borsch extends Recipe
{

    protected function prepareIngridients(): void
    {
        echo 'Подготовка ингридиентов для борща.' . PHP_EOL;
    }

    protected function cookIngridients(): void
    {
        echo 'Приготовление борща.' . PHP_EOL;
    }
}