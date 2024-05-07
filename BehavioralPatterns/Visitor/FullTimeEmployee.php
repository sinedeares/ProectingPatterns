<?php

namespace Visitor;

use Visitor\Employee;

class FullTimeEmployee implements Employee
{

    public function accept(EmployeeVisitor $visitor): void
    {
        $visitor->visitFullTimeEmployee($this);
    }
}