<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $numbers = explode(',', $toAdd);

        array_walk($numbers, static function ($number) {
            return (int) $number;
        });

        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }

        return $total;
    }
}