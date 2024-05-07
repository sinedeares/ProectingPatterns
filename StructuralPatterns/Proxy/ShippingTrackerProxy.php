<?php

namespace Proxy;

use Proxy\ShippingTracker;

class ShippingTrackerProxy implements ShippingTracker
{
    private $realShippingTracker;
    private $requestCount = 0;
    private $maxRequests = 5; // Максимальное количество запросов к API

    public function trackShipment(string $trackingNumber): string {
        if ($this->requestCount >= $this->maxRequests) {
            return "Достигнуто максимальное количество запросов. Пожалуйста, повторите позднее.";
        }

        if (!isset($this->realShippingTracker)) {
            $this->realShippingTracker = new RealShippingTracker();
        }

        $this->requestCount++;

        return $this->realShippingTracker->trackShipment($trackingNumber);
    }
}