<?php

namespace Adapter;

class SberbankAcquiring
{
    public function transferMoney(float $amount): string
    {
        return 'Сумма' . $amount . 'руб. успешно переведена через Sberbank Acquiring.';
    }
}