<?php

namespace Strategy;

class PaymentContext
{
    private $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy): void
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function processPayment($amount): void
    {
        $this->paymentStrategy->pay($amount);
    }
}