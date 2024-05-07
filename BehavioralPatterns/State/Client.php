<?php

namespace State;

require_once '../../vendor/autoload.php';

$tvContext = new TVContext(new OffState());
$tvContext->pressButton();
$tvContext->transitionTo(new OnState());
$tvContext->pressButton();