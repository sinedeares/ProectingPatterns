<?php

namespace Mediator;

use Mediator\DeliveryMediator;


//конкретный посредник
class DeliveryManager implements DeliveryMediator
{

    private $courier;
    private $orderManagementSystem;

    public function setCourier(Courier $courier): void
    {
        $this->courier = $courier;
    }

    public function setOrderManagementSystem(OrderManagementSystem $oms): void
    {
        $this->orderManagementSystem = $oms;
    }

    public function notifyOrderPlaced($order): void
    {
        echo "Менеджер доставки получил уведомление о размещенном заказе\n";
        $this->courier->pickupOrder($order);
    }

    public function notifyOrderPickedUp($order): void
    {
        echo "Менеджер доставки получил уведомление о забранном заказе\n";
        $this->orderManagementSystem->markOrderAsInTransit($order);
    }

    public function notifyOrderDelivered($order): void
    {
        echo "Менеджер доставки получил уведомление о доставленном заказе\n";
        $this->orderManagementSystem->markOrderAsDelivered($order);
    }
}