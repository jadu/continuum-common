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

    /**
     * @param OrganisationInterface $organisation
     */
    public function setOrganisation(OrganisationInterface $organisation);

    /**
     * @param string $userReference
     */
    public function setUserReference($userReference);

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt);

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(DateTime $updatedAt);

    /**
     * @param DateTime $invitedAt
     */
    public function setInvitedAt(DateTime $invitedAt);
}
