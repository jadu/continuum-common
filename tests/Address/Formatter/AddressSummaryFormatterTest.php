<?php

namespace Jadu\ContinuumCommon\Tests\Address\Formatter;

use Jadu\ContinuumCommon\Address\Contract\AddressInterface;
use Jadu\ContinuumCommon\Address\Formatter\AddressSummaryFormatter;
use Jadu\ContinuumCommon\Address\Model\Address;
use PHPUnit_Framework_TestCase as AbstractTestCase;

class AddressSummaryFormatterTest extends AbstractTestCase
{
    public function testGenerateFromAddress()
    {
        $address = new Address();
        $address->setPaon(12);
        $address->setStreet('Main Street');
        $address->setTown('Leicester');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = '12 Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressHandlesSaon()
    {
        $address = new Address();
        $address->setSaon('Flat 7');
        $address->setStreet('Main Street');
        $address->setTown('Leicester');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = 'Flat 7, Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressHandlesSaonAndPaon()
    {
        $address = new Address();
        $address->setPaon(12);
        $address->setSaon('Flat 7');
        $address->setStreet('Main Street');
        $address->setTown('Leicester');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = 'Flat 7, 12 Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressHandlesNumericSaonAndPaon()
    {
        $address = new Address();
        $address->setPaon('The Cottages');
        $address->setSaon('2');
        $address->setStreet('Moseley Road');
        $address->setTown('Hallow');
        $address->setPostCode('WR2 6NJ');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = '2 The Cottages, Moseley Road, Hallow, WR2 6NJ';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressHandlesOtherPaon()
    {
        $address = new Address();
        $address->setPaon('12A');
        $address->setStreet('Main Street');
        $address->setTown('Leicester');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = '12a Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressHandlesSaonAndNonNumericPaon()
    {
        $address = new Address();
        $address->setPaon('Highrise House');
        $address->setSaon('Flat 7');
        $address->setStreet('Main Street');
        $address->setTown('Leicester');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = 'Flat 7, Highrise House, Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressAppliesTitleCaseCorrectly()
    {
        $address = new Address();
        $address->setPaon('My House');
        $address->setSaon('Flat EE7');
        $address->setStreet('Main STreet');
        $address->setTown('LeicesteR');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = 'Flat Ee7, My House, Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateFromAddressAppliesTitleCaseCorrectlyForAllCapitals()
    {
        $address = new Address();
        $address->setPaon('MY HOUSE');
        $address->setSaon('FLAT EE7');
        $address->setStreet('MAIN STREET');
        $address->setTown('LEICESTER');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_PROPERTY);

        $expected = 'Flat Ee7, My House, Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }

    public function testGenerateStreetAddressDoesntIncludeHouseNumbers()
    {
        $address = new Address();
        $address->setPaon('My House');
        $address->setSaon('Flat EE7');
        $address->setStreet('Main STreet');
        $address->setTown('LeicesteR');
        $address->setPostCode('LE1 3EN');
        $address->setType(AddressInterface::TYPE_STREET);

        $expected = 'Main Street, Leicester, LE1 3EN';

        $this->assertEquals($expected, AddressSummaryFormatter::generateFromAddress($address));
    }
}
