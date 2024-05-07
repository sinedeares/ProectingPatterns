<?php

namespace Observer;

interface UserObserver
{
    public function userCreated($username);
    public function userUpdated($username);
    public function userDeleted($username);
}