<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Jadu\ContinuumCommon\Address\Contract\AddressInterface;

/**
 * Interface HydratableOrganisationInterface.
 */
interface HydratableOrganisationInterface
{
    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @param string $reference
     */
    public function setReference($reference);

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt);

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(DateTime $updatedAt);

    /**
     * @param string $vatNumber
     */
    public function setVatNumber($vatNumber);

    /**
     * @param string $telephonePrimary
     */
    public function setTelephonePrimary($telephonePrimary);

    /**
     * @param string $telephoneSecondary
     */
    public function setTelephoneSecondary($telephoneSecondary);

    /**
     * @param AddressInterface $address
     */
    public function setAddress($address);

    /**
     * @param OrganisationMembershipInterface $member
     */
    public function addMember(OrganisationMembershipInterface $member);

    /**
     * @param OrganisationMembershipInviteInterface $memberInvite
     */
    public function addInvitedMember(OrganisationMembershipInviteInterface $memberInvite);

    /**
     * @param ArrayCollection|OrganisationMembershipInterface[] $members
     */
    public function setMembers($members);

    /**
     * @param ArrayCollection|OrganisationMembershipInviteInterface[] $invitedMembers
     */
    public function setInvitedMembers($invitedMembers);

    /**
     * @param string $registeredBusinessName
     */
    public function setRegisteredBusinessName($registeredBusinessName);

    /**
     * @param string $companyRegistrationNumber
     */
    public function setCompanyRegistrationNumber($companyRegistrationNumber);

    /**
     * @param string $charityReferenceNumber
     */
    public function setCharityReferenceNumber($charityReferenceNumber);
    /**
     * @param string $nhsOrganisationCode
     */
    public function setNhsOrganisationCode($nhsOrganisationCode);
}
