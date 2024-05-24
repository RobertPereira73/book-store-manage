<?php

namespace App\Reports;

abstract class Reports
{
    abstract protected function name(): string;

    public function getName(): string
    {
        return $this->name();
    }
}
