<?php

use Builder\CharacterDirector;
use Builder\PaladineBuilder;
use Builder\WizardBuilder;

require_once '../../vendor/autoload.php';

$characterDirector = new CharacterDirector();
$paladineBuilder = new PaladineBuilder();
$wizardBuilder = new WizardBuilder();

$paladine = $characterDirector->createPaladine($paladineBuilder);
echo "Статы паладина:\n";
$paladine->displayStats();

$wizard = $characterDirector->createWizard($wizardBuilder);
echo "Статы волшебника:\n";
$wizard->displayStats();