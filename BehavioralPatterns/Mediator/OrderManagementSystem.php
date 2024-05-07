<?php

namespace Mediator;

class OrderManagementSystem
{

    private $mediator;

    public function __construct(DeliveryMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function placeOrder($order): void
    {
        echo "Заказ размещен\n";
        $this->mediator->notifyOrderPlaced($order);
    }

    public function markOrderAsInTransit($order): void
    {
        echo "Заказ отправлен в путь\n";
    }

    public function markOrderAsDelivered($order): void
    {
        echo "Заказ доставлен\n";
    }

}