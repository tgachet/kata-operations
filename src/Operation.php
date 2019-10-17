<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);

        array_walk($numbers, function ($number){
            return (int) $number;
        });
        $first = reset($numbers);
        $second = $numbers[1];

        return $first + $second;
    }
}