<?php

namespace Strategy;

require_once '../../vendor/autoload.php';

$creditCardPayment = new CreditCardPayment("1234 5678 9012 3456", "12/25", "123");
$webMoneyPayment = new SomeWebMoneySystem("example@example.com", "password123");

$paymentContext = new PaymentContext($creditCardPayment);

$paymentContext->processPayment(100);

$paymentContext->setPaymentStrategy($webMoneyPayment);

$paymentContext->processPayment(50);