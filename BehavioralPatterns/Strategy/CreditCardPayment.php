<?php

namespace Strategy;

use Strategy\PaymentStrategy;

class CreditCardPayment implements PaymentStrategy
{

    private $cardNumber;
    private $expirationDate;
    private $cvv;

    public function __construct($cardNumber, $expirationDate, $cvv)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }

    public function pay($amount): void
    {
        echo "Оплата с использованием кредитной карты: {$amount} руб.\n";
    }
}