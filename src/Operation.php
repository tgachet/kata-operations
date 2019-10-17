<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $separator = ',';
        if ($pos = strpos($toAdd, '#')) {
            $toAdd = substr($toAdd, $pos+1);
            $separator = '|';
        }
        $numbers = explode($separator, $toAdd);

        $total = 0;
        foreach ($numbers as $number) {
            $total += (int) $number;
        }

        return $total;
    }
}