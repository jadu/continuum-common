<?php

namespace Jadu\ContinuumCommon\Organisation\Contract;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Jadu\ContinuumCommon\Address\Contract\AddressInterface;

/**
 * Interface OrganisationInterface.
 */
interface OrganisationInterface extends HydratableOrganisationInterface
{
    /**
     * @return string
     */
    public function getReference();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return ArrayCollection|OrganisationMembershipInterface[]
     */
    public function getMembers();

    /**
     * @return ArrayCollection|OrganisationMembershipInviteInterface[]
     */
    public function getInvitedMembers();

    /**
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * @return string
     */
    public function getVatNumber();

    /**
     * @return string
     */
    public function getTelephonePrimary();

    /**
     * @return string
     */
    public function getTelephoneSecondary();

    /**
     * @return AddressInterface
     */
    public function getAddress();

    /**
     * @return string
     */
    public function getRegisteredBusinessName();

    /**
     * @return string
     */
    public function getCompanyRegistrationNumber();
    /**
     * @return string
     */
    public function getCharityReferenceNumber();

    /**
     * @return string
     */
    public function getNhsOrganisationCode();
}
