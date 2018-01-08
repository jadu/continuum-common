<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

use DateTime;

/**
 * Interface OrganisationMembershipInviteInterface.
 *
 * @author Jadu Ltd.
 */
interface OrganisationMembershipInviteInterface extends HydratableOrganisationMembershipInviteInterface, OrganisationMembershipRoleInterface, OrganisationMembershipStatusInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getRole();

    /**
     * @return OrganisationInterface
     */
    public function getOrganisation();

    /**
     * @return string
     */
    public function getUserReference();

    /**
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * @return DateTime
     */
    public function getUpdatedAt();
}
