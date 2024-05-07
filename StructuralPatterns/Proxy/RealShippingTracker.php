<?php

namespace Proxy;

use Proxy\ShippingTracker;

class RealShippingTracker implements ShippingTracker
{

    public function trackShipment(string $trackingNumber): string {
        return "Отслеживание информации о доставке $trackingNumber";
    }
}