<?php

namespace TemplateMethod;

require_once '../../vendor/autoload.php';

$borsch = new Borsch();
$borsch->cook();

$curryChicken = new CurryChicken();
$curryChicken->cook();