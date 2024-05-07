<?php

namespace Command;

require_once '../../vendor/autoload.php';

$light = new Light();
$turnOnCommand = new TurnOnLight($light);
$turnOffCommand = new TurnOffLight($light);

$remoteController = new RemoteController();
$remoteController->addCommand($turnOnCommand);
$remoteController->pressButton();
$remoteController->addCommand($turnOffCommand);

$remoteController->pressButton();