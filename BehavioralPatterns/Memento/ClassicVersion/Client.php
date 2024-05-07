<?php

namespace MementoClassic;

require_once '../../../vendor/autoload.php';

$originator = new Originator("Исходное-состояние");
$caretaker = new Caretaker();

// сохраняем состояние
$caretaker->addMemento($originator->save());

// изменяем состояние
$originator->doSomething();

// восстанавливаем сохраненное состояние
$originator->restore($caretaker->getMemento(0));