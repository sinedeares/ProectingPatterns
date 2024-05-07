<?php

namespace TemplateMethod;

class CurryChicken extends Recipe
{
    protected function prepareIngridients(): void
    {
        echo 'Подготовка ингридиентов для курицы карри.' . PHP_EOL;
    }

    protected function cookIngridients(): void
    {
        echo 'Приготовление курицы карри.' . PHP_EOL;
    }
}