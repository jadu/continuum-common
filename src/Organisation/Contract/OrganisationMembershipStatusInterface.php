<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

/**
 * Interface OrganisationMembershipStatusInterface.
 *
 * @author Jadu Ltd.
 */
interface OrganisationMembershipStatusInterface
{
    const STATUS_INVITED = 'invited';
    const STATUS_REGISTERED = 'registered';

    /**
     * @return string
     */
    public function getStatus();
}
