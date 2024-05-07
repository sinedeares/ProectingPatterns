<?php

namespace ChainOfResponsibility;


abstract class Handler
{
    protected $nextHandler;

    public function setNext(Handler $nextHandler): void
    {
        $this->nextHandler = $nextHandler;
    }

    abstract public function handle($request);
}