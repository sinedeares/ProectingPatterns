<?php

namespace Visitor;

interface EmployeeVisitor
{
    public function visitFullTimeEmployee(FullTimeEmployee $employee);
    public function visitPartTimeEmployee(PartTimeEmployee $employee);
}