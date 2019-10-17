<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);
        $first = (int) reset($numbers);
        $second = (int) $numbers[1];

        return $first + $second;
    }
}