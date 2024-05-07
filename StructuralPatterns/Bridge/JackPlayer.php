<?php

namespace Bridge;

use Bridge\Player;

class JackPlayer implements Player
{

    public function playAudio(string $device, string $track): string
    {
        return "Playing " . $track . " on " . $device . "by Jack 3.5" ;
    }
}