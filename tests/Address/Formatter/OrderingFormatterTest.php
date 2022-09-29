<?php

namespace Jadu\ContinuumCommon\Tests\Address\Formatter;

use Jadu\ContinuumCommon\Address\Formatter\OrderingFormatter;
use PHPUnit_Framework_TestCase as AbstractTestCase;
use stdClass;

class OrderingFormatterTest extends AbstractTestCase
{
    private function getUnorderedAddresses()
    {
        return [
            '2 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            'FIRST FLOOR, 3 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '1 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '2A Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '10 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '29 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '3 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
        ];
    }

    private function getCorrectAddressOrder()
    {
        return [
            '1 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '2 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '2A Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '3 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '10 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            '29 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
            'FIRST FLOOR, 3 Merus Court, Meridian Business Park, Braunstone Town, LE19 1RJ',
        ];
    }

    private function getUnorderedAddressObjects()
    {
        $objects = [];

        foreach ($this->getUnorderedAddresses() as $address) {
            $object = new stdClass();
            $object->label = $address;

            $objects[] = $object;
        }

        return $objects;
    }

    public function testOrderIsCorrect()
    {
        $expected = $this->getCorrectAddressOrder();
        $addresses = $this->getUnorderedAddressObjects();

        OrderingFormatter::order($addresses, 'label');

        $ordered = [];
        foreach ($addresses as $address) {
            $ordered[] = $address->label;
        }

        static::assertEquals($expected, $ordered);
    }
}
