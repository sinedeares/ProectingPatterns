<?php

namespace Observer;


//издатель
class UserManager
{
    private $observers = [];

    public function attach(UserObserver $observer): void
    {
        $this->observers[] = $observer;
        echo "UserManager: Наблюдатель добавлен.\n";
    }

    public function detach(UserObserver $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
            echo "UserManager: Наблюдатель удалён.\n";
        }
    }

    public function createUser($username): void
    {
        //бизнес-логика создания пользователя

        // Уведомляем наблюдателей о создании пользователя
        foreach ($this->observers as $observer) {
            $observer->userCreated($username);
        }
    }

    public function updateUser($username): void
    {
        //бизнес-логика обновления пользователя

        // Уведомляем наблюдателей об обновлении данных пользователя
        foreach ($this->observers as $observer) {
            $observer->userUpdated($username);
        }
    }

    public function deleteUser($username): void
    {
        //бизнес-логика удаления пользователя

        // Уведомляем наблюдателей об удалении пользователя
        foreach ($this->observers as $observer) {
            $observer->userDeleted($username);
        }
    }
}