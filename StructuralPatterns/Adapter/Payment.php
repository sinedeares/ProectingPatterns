<?php

namespace Adapter;

interface Payment
{
    public function makePayment(float $amount): string;
}