<?php

namespace Visitor;

class PartTimeEmployee
{
    public function accept( EmployeeVisitor $visitor ): void
    {
        $visitor->visitPartTimeEmployee( $this );
    }
}