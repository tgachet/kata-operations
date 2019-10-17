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
}