<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

use DateTime;

/**
 * Interface OrganisationMembershipInterface.
 *
 * @author Jadu Ltd.
 */
interface OrganisationMembershipInterface extends HydratableOrganisationMembershipInterface
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
     * @return OrganisationInterface
     */
    public function getOrganisation();

    /**
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * @return DateTime
     */
    public function getInvitedAt();

    /**
     * @return string
     */
    public function getRole();
}
