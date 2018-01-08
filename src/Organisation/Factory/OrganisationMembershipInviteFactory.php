<?php

namespace Jadu\ContinuumCommon\Organisation\Factory;

use Jadu\ContinuumCommon\Organisation\Model\OrganisationMembershipInvite;

/**
 * Class OrganisationMembershipInviteFactory.
 *
 * @author Jadu Ltd.
 */
class OrganisationMembershipInviteFactory
{
    /**
     * @return OrganisationMembershipInvite()
     */
    public function create()
    {
        return new OrganisationMembershipInvite();
    }
}
