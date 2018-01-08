<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

use DateTime;

/**
 * Interface HydratableOrganisationMembershipInviteInterface.
 *
 * @author Jadu Ltd.
 */
interface HydratableOrganisationMembershipInviteInterface
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
}
