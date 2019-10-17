<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);
        $first = reset($numbers);

        return (int) $first;
    }
}