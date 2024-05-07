<?php

namespace Observer;

class AdminObserver implements UserObserver
{
    public function userCreated($username): void
    {
        echo "Admin: Новый пользователь '$username' создан.\n";
    }

    public function userUpdated($username): void
    {
        echo "Admin: Пользователь '$username' обновлён.\n";
    }

    public function userDeleted($username): void
    {
        echo "Admin: Пользователь '$username' удалён.\n";
    }
}