<?php

namespace Jadu\ContinuumCommon\Organisation\Factory;

use Jadu\ContinuumCommon\Organisation\Model\OrganisationMembershipInvite;
use PHPUnit_Framework_TestCase;

/**
 * Class OrganisationMembershipInviteFactoryTest.
 *
 * @author Jadu Ltd.
 */
class OrganisationMembershipInviteFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OrganisationMembershipInviteFactory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = new OrganisationMembershipInviteFactory();
    }

    public function testCreateReturnsOrganisationMembershipInvite()
    {
        static::assertInstanceOf(OrganisationMembershipInvite::class, $this->factory->create());
    }
}
