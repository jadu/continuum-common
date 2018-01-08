<?php

namespace Jadu\ContinuumCommon\Address\Factory;

use Jadu\ContinuumCommon\Address\Model\Address;
use PHPUnit_Framework_TestCase;

/**
 * Class AddressFactoryTest.
 *
 * @author Jadu Ltd.
 */
class AddressFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AddressFactory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = new AddressFactory();
    }

    public function testCreateReturnsAddress()
    {
        static::assertInstanceOf(Address::class, $this->factory->create());
    }
}
