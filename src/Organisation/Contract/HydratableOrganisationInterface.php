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

    public function setCreatedAt(DateTime $createdAt);

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

    public function setAddress(AddressInterface $address);

    public function addMember(OrganisationMembershipInterface $member);

    /**
     * @param ArrayCollection|OrganisationMembershipInterface[] $members
     */
    public function setMembers($members);

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
