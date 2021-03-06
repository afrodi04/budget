<?php

namespace Tests\Unit;

use App\Helper;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function testRawNumberConversion(): void
    {
        $cases = [
            [
                'rawNumber' => 9.70,
                'expected' => 970
            ],
            [
                'rawNumber' => 0.01,
                'expected' => 1
            ],
            [
                'rawNumber' => 123,
                'expected' => 12300
            ],
            [
                'rawNumber' => 9.99,
                'expected' => 999
            ]
        ];

        foreach ($cases as $case) {
            $result = Helper::rawNumberToInteger($case['rawNumber']);

            $this->assertEquals($case['expected'], $result);
        }
    }
}
