<?php

namespace Mediator;

require_once '../../vendor/autoload.php';

// Создание посредника и компонентов
$deliveryManager = new DeliveryManager();
$courier = new Courier($deliveryManager);
$orderManagementSystem = new OrderManagementSystem($deliveryManager);

// Назначение компонентов посреднику
$deliveryManager->setCourier($courier);
$deliveryManager->setOrderManagementSystem($orderManagementSystem);

// Размещение заказа и доставка
$order = "Заказ #123";
$orderManagementSystem->placeOrder($order);
$courier->pickupOrder($order);
$courier->deliverOrder($order);