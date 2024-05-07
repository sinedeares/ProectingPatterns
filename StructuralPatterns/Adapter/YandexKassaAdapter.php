<?php

namespace Adapter;

use Adapter\Payment;

class YandexKassaAdapter implements Payment
{

    private $yandexKassa;

    public function __construct(YandexKassa $yandexKassa)
    {
        $this->yandexKassa = $yandexKassa;
    }
    public function makePayment(float $amount): string
    {
        return $this->yandexKassa->pay($amount);
    }
}