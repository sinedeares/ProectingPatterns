<?php

namespace Bridge;

//Реализация
interface Player
{
    public function playAudio(string $device, string $track): string;
}