<?php

namespace Adapter;

class YandexKassa
{
    public function pay(float $amount): string
    {
        return 'Платёж на сумму ' . $amount . ' руб. через Яндекс.Кассу прошел успешно';
    }
}