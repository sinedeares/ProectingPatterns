<?php

namespace Mediator;

class Courier
{
    private $mediator;

    public function __construct(DeliveryMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function pickupOrder($order): void
    {
        echo "Курьер забирает заказ\n";
        $this->mediator->notifyOrderPickedUp($order);
    }

    public function deliverOrder($order): void
    {
        echo "Курьер доставляет заказ\n";
        $this->mediator->notifyOrderDelivered($order);
    }
}