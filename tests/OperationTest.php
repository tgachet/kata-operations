<?php

namespace App\Tests;

use App\Operation;
use PHPUnit\Framework\TestCase;

class OperationTest extends TestCase
{
    public function testItReturnsZero(): void
    {
        $operation = new Operation();
        $this->assertEquals(0, $operation->add('0,0'));
    }

    public function testItReturnsOne(): void
    {
        $operation = new Operation();
        $this->assertEquals(1, $operation->add('1,0'));
    }

    public function testItReturnsTwo(): void
    {
        $operation = new Operation();
        $this->assertEquals(2, $operation->add('2,0'));
    }
}