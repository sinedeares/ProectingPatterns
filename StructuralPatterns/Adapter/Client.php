<?php

use Adapter\Payment;
use Adapter\SberbankAcquiring;
use Adapter\SberbankAcquiringAdapter;
use Adapter\YandexKassa;
use Adapter\YandexKassaAdapter;

require_once '../../vendor/autoload.php';

function doPayment(Payment $payment, float $amount): void
{
    echo $payment->makePayment($amount);
}

$yandexKassa = new YandexKassa();
$yandexKassaAdapter = new YandexKassaAdapter($yandexKassa);

$sberbankAcquiring = new SberbankAcquiring();
$sberbankAcquiringAdapter = new SberbankAcquiringAdapter($sberbankAcquiring);

doPayment($yandexKassaAdapter, 1000);
doPayment($sberbankAcquiringAdapter, 10000);

