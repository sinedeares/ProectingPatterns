<?php

namespace Visitor;

interface Employee
{
    public function accept(EmployeeVisitor $visitor);
}