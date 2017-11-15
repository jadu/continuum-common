<?php

namespace Jadu\Quantum\Tests\Common\Formatter;

use Jadu\ContinuumCommon\Address\Formatter\TitleCaseFormatter;
use PHPUnit_Framework_TestCase as AbstractTestCase;

class TitleCaseFormatterTest extends AbstractTestCase
{
    /**
     * @dataProvider testFormatDataProvider
     */
    public function testFormat($text, $expected)
    {
        $this->assertEquals($expected, TitleCaseFormatter::format($text));
    }

    public function testFormatDataProvider()
    {
        return [
            ['the', 'The'],
            ['THE', 'The'],
            ['the matrix', 'The Matrix'],
            ['tHe mATrix RelOAdeD', 'The Matrix Reloaded'],
        ];
    }
}
