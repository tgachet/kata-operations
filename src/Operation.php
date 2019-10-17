<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);
        $first = reset($numbers);
        $second = $numbers[1];

        if ($first != 0) {
            return (int) $first;
        }

        return (int) $second;
    }
}