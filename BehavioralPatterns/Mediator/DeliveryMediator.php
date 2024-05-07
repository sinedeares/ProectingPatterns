<?php

namespace Mediator;

// Интерфейс посредника
interface DeliveryMediator
{
    public function notifyOrderPlaced($order);

    public function notifyOrderPickedUp($order);

    public function notifyOrderDelivered($order);
}