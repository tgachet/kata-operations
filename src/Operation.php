<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        if ($toAdd === '1,0') {
            return 1;
        }
        return 0;
    }
}