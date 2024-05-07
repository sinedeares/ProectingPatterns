<?php

namespace Visitor;

require_once '../../vendor/autoload.php';

$fullTimeEmployee = new FullTimeEmployee();
$partTimeEmployee = new PartTimeEmployee();

$auditor = new Auditor();

$fullTimeEmployee->accept($auditor);
$partTimeEmployee->accept($auditor);