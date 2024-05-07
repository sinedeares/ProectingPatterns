<?php

namespace Visitor;

use Visitor\EmployeeVisitor;

//конкретный посетитель
class Auditor implements EmployeeVisitor
{

    public function visitFullTimeEmployee(FullTimeEmployee $employee): void
    {
        echo "Аудит полнорабочего сотрудника: проверяем информацию о зарплате и должности.\n";
    }

    public function visitPartTimeEmployee(PartTimeEmployee $employee): void
    {
        echo "Аудит сотрудника с неполной занятостью: проверяем информацию о количестве отработанных часов.\n";
    }
}