<?php

namespace State;

interface State
{
    public function handle(): void;
}