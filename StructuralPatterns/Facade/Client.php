<?php

namespace Facade;

require_once '../../vendor/autoload.php';

$newOrder = new OrderFacade();
$newOrder->makeOrder();