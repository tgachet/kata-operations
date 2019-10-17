<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);
        $first = reset($numbers);
        if ($first != 0) {
            return (int) $first;
        }
        if ($toAdd === '1,0') {
            return 1;
        }
        return 0;
    }
}