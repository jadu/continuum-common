<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

/**
 * Interface OrganisationMembershipRoleInterface.
 *
 * @author Jadu Ltd.
 */
interface OrganisationMembershipRoleInterface
{
    const ROLE_ADMIN = 'admin';
    const ROLE_STANDARD = 'standard';

    /**
     * @return string
     */
    public function getRole();

    /**
     * @param string $role
     */
    public function setRole($role);
}
