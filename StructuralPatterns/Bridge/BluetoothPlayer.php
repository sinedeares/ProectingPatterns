<?php

namespace Bridge;

use Bridge\Player;

class BluetoothPlayer implements Player
{

    public function playAudio(string $device, string $track): string
    {
        return "Playing " . $track . " on " . $device . "by Bluetooth";
    }
}