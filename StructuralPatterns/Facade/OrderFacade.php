<?php

namespace Facade;

class OrderFacade
{
    private $orderSubSystem;
    private $paymentSubSystem;
    private $shippingSubSystem;

    public function __construct()
    {
        $this->orderSubSystem = new OrderSubSystem();
        $this->paymentSubSystem = new PaymentSubSystem();
        $this->shippingSubSystem = new ShippingSubSystem();
    }

    public function makeOrder()
    {
        $this->orderSubSystem->createOrder();
        $this->paymentSubSystem->paymentProcess();
        $this->shippingSubSystem->shipOrder();
        echo "Заказ успешно оформлен!\n";
    }
}