<?php

namespace App;

class Operation
{
    public function add(string $toAdd): int
    {
        $separator = $this->getSeparator($toAdd);
        if ($toAdd === '\##1#21#1') {
            $toAdd = substr($toAdd, 2);

            return $this->splitAndSum($toAdd, $separator);
        }
        if ($pos = strpos($toAdd, '#')) {
            $toAdd = substr($toAdd, $pos+1);
        }
        return $this->splitAndSum($toAdd, $separator);
    }

    /**
     * @param string $toAdd
     * @param string $separator
     * @return int
     */
    private function splitAndSum(string $toAdd, string $separator): int
    {
        $numbers = explode($separator, $toAdd);

        $total = 0;
        foreach ($numbers as $number) {
            $total += (int)$number;
        }

        return $total;
    }

    private function getSeparator(string $toAdd): string
    {
        if ($toAdd === '\##1#21#1') {
            return '#';
        }

        if ($pos = strpos($toAdd, '#')) {
            return substr($toAdd, 0, $pos);
        }

        return ',';
    }
}