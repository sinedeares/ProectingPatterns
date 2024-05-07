<?php

namespace Observer;

require_once '../../vendor/autoload.php';

//создаём наблюдателя
$adminObserver = new AdminObserver();

// Создаем издателя
$userManager = new UserManager();

//подписка
$userManager->attach($adminObserver);

$userManager->createUser('FirstBlood');
$userManager->updateUser('FirstBlood');
$userManager->deleteUser('FirstBlood');


//отписка
$userManager->detach($adminObserver);