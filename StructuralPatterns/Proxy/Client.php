<?php

namespace Proxy;

require_once '../../vendor/autoload.php';

$shippingTracker = new ShippingTrackerProxy();

// Первый вызов для отслеживания почтовой отправки
echo $shippingTracker->trackShipment("ABC123") . "\n";

// Повторные вызовы, превышающие максимальное количество запросов
for ($i = 0; $i < 6; $i++) {
    echo $shippingTracker->trackShipment("XYZ456") . "\n";
}

