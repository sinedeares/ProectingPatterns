<?php

namespace Prototype;

require_once '../../vendor/autoload.php';

$firstPaladine = new PaladineUnit('Alex', 100, 10);
$secondPaladine = clone $firstPaladine;

echo 'Имя первого паладина: ' . $firstPaladine->getName() . ' Здоровье первого паладина' . $firstPaladine->getHealth() . ' Урон от первого паладина' . $firstPaladine->getAttackPoint() . '<br>';
echo 'Имя склонированного паладина: ' .$secondPaladine->getName() . ' Здоровье склонированного паладина' . $secondPaladine->getHealth() . ' Урон от склонированного паладина' . $secondPaladine->getAttackPoint() . '<br>';