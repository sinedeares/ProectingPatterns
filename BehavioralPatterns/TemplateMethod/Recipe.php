<?php

namespace TemplateMethod;

abstract class Recipe
{
    //шаблонный метод

    public function cook(): void
    {
        $this->prepareIngridients();
        $this->cookIngridients();
        $this->serve();
    }

    abstract protected function prepareIngridients();
    abstract protected function cookIngridients();

    protected function serve (): void
    {
        echo 'Блюдо подано.' . PHP_EOL;
    }

}