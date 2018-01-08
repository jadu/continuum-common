<?php

namespace Jadu\ContinuumCommon\Organisation\Factory;

use Jadu\ContinuumCommon\Organisation\Model\Organisation;
use PHPUnit_Framework_TestCase;

/**
 * Class OrganisationFactoryTest.
 *
 * @author Jadu Ltd.
 */
class OrganisationFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OrganisationFactory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = new OrganisationFactory();
    }

    public function testCreateReturnsOrganisation()
    {
        static::assertInstanceOf(Organisation::class, $this->factory->create());
    }
}
