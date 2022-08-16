<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

use DateTime;

/**
 * Interface HydratableOrganisationMembershipInterface.
 *
 * @author Jadu Ltd.
 */
interface HydratableOrganisationMembershipInterface
{
    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @param string $role
     */
    public function setRole($role);

    public function setOrganisation(OrganisationInterface $organisation);

    public function setCreatedAt(DateTime $createdAt);

    public function setUpdatedAt(DateTime $updatedAt);

    public function setInvitedAt(DateTime $invitedAt);
}
