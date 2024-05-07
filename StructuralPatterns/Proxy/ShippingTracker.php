<?php

namespace Proxy;

interface ShippingTracker
{
    public function trackShipment(string $trackingNumber): string;
}