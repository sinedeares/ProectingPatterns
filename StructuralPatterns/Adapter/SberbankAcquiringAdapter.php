<?php

namespace Adapter;

use Adapter\Payment;

class SberbankAcquiringAdapter implements Payment
{
    private $sberbankAcquiring;

    public function __construct(SberbankAcquiring $sberbankAcquiring)
    {
        $this->sberbankAcquiring = $sberbankAcquiring;
    }
    public function makePayment(float $amount): string
    {
        return $this->sberbankAcquiring->transferMoney($amount);
    }
}