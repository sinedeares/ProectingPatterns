<?php

use Bridge\BluetoothPlayer;
use Bridge\Headphones;
use Bridge\JackPlayer;
use Bridge\Speaker;

require_once '../../vendor/autoload.php';


$jackPlayer = new JackPlayer();
$bluetoothPlayer = new BluetoothPlayer();

$headphones = new Headphones($jackPlayer);
echo $headphones->play("Hollywood Undead - Young");

$speaker = new Speaker($bluetoothPlayer);
echo $speaker->play("Hollywood Undead - Usual Suspect") ;
