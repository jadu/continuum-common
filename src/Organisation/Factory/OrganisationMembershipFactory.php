<?php

namespace Jadu\ContinuumCommon\Organisation\Factory;

use Jadu\ContinuumCommon\Organisation\Model\OrganisationMembership;

/**
 * Class OrganisationMembershipFactory.
 *
 * @author Jadu Ltd.
 */
class OrganisationMembershipFactory
{
    /**
     * @return OrganisationMembership()
     */
    public function create()
    {
        return new OrganisationMembership();
    }
}
