<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);

        $total = 0;
        foreach ($numbers as $number) {
            $total += (int) $number;
        }

        return $total;
    }
}