<?php

namespace MementoPHP;

require_once '../../../vendor/autoload.php';

$originator = new Originator("Исходное-состояние");

// сохраняем состояние
$savedState = $originator->save();

// изменяем состояние
$originator->doSomething();

// восстанавливаем сохраненное состояние
$originator->restore($savedState);