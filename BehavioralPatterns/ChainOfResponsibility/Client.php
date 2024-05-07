<?php

namespace ChainOfResponsibility;

require_once '../../vendor/autoload.php';


$moveHandler = new MoveHandler();
$attackHandler = new AttackHandler();
$defendHandler = new DefendHandler();

$moveHandler->setNext($attackHandler);
$attackHandler->setNext($defendHandler);

$moveHandler->handle("move");
$moveHandler->handle("attack");
$moveHandler->handle("defend");
