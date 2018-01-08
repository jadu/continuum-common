<?php

namespace Jadu\ContinuumCommon\Organisation\Factory;

use Jadu\ContinuumCommon\Organisation\Model\OrganisationMembership;
use PHPUnit_Framework_TestCase;

/**
 * Class OrganisationMembershipFactoryTest.
 *
 * @author Jadu Ltd.
 */
class OrganisationMembershipFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OrganisationMembershipFactory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = new OrganisationMembershipFactory();
    }

    public function testCreateReturnsOrganisationMembership()
    {
        static::assertInstanceOf(OrganisationMembership::class, $this->factory->create());
    }
}
