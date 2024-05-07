<?php

namespace Strategy;

use Strategy\PaymentStrategy;

class SomeWebMoneySystem implements PaymentStrategy
{

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function pay($amount): void
    {
        echo "Оплата с использованием онлайн платёжной системы: {$amount} руб.\n";
    }
}