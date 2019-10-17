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

    public function testItReturns21(): void
    {
        $operation = new Operation();
        $this->assertEquals(21, $operation->add('0,21'));
    }

    public function testItReturns22(): void
    {
        $operation = new Operation();
        $this->assertEquals(22, $operation->add('1,21'));
    }

    public function testItReturns23(): void
    {
        $operation = new Operation();
        $this->assertEquals(23, $operation->add('1,21,1'));
    }

    /**
     * @dataProvider numberExamples
     * @param string $toAdd
     * @param int $expected
     */
    public function testItReturnsTheAddition(string $toAdd, int $expected): void
    {
        $operation = new Operation();
        $this->assertEquals($expected, $operation->add($toAdd));
    }

    public function numberExamples(): array
    {
        return [
            '1' => [
                '1,0',
                1,
            ],
            '2' => [
                '1,1',
                2,
            ],
            '33' => [
                '1,0,32',
                33,
            ],
            '456' => [
                '450,0,3,3',
                456,
            ],
            '35' => [
                '0,20,10,2,1,1,1',
                35,
            ],
        ];
    }

    public function testItReturns23WithSeparatorPipe(): void
    {
        $operation = new Operation();
        $this->assertEquals(23, $operation->add('|#1|21|1'));
    }
}