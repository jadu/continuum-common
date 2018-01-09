<?php

namespace Jadu\ContinuumCommon\Organisation\Model;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Jadu\ContinuumCommon\Address\Contract\AddressInterface;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationInterface;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationMembershipInterface;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationMembershipInviteInterface;

/**
 * Class Organisation.
 *
 * @author Jadu Ltd.
 */
class Organisation implements OrganisationInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $vatNumber;

    /**
     * @var string
     */
    protected $telephonePrimary;

    /**
     * @var string
     */
    protected $telephoneSecondary;

    /**
     * @var AddressInterface
     */
    protected $address;

    /**
     * @var ArrayCollection|OrganisationMembershipInterface[]
     */
    protected $members;

    /**
     * @var string
     */
    protected $registeredBusinessName;

    /**
     * @var string
     */
    protected $companyRegistrationNumber;

    /**
     * @var string
     */
    protected $charityReferenceNumber;

    /**
     * @var string
     */
    protected $nhsOrganisationCode;

    public function __construct()
    {
        $this->setCreatedAt(new DateTime());
        $this->setUpdatedAt(new DateTime());
        $this->members = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelephonePrimary()
    {
        return $this->telephonePrimary;
    }

    /**
     * {@inheritdoc}
     */
    public function setTelephonePrimary($telephonePrimary)
    {
        $this->telephonePrimary = $telephonePrimary;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelephoneSecondary()
    {
        return $this->telephoneSecondary;
    }

    /**
     * {@inheritdoc}
     */
    public function setTelephoneSecondary($telephoneSecondary)
    {
        $this->telephoneSecondary = $telephoneSecondary;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddress(AddressInterface $address)
    {
        $this->address = $address;
    }

    /**
     * {@inheritdoc}
     */
    public function setMembers($members)
    {
        $this->members->clear();
        foreach ($members as $member) {
            $this->addMember($member);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addMember(OrganisationMembershipInterface $member)
    {
        $this->members->add($member);
    }

    /**
     * {@inheritdoc}
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * {@inheritdoc}
     */
    public function getRegisteredBusinessName()
    {
        return $this->registeredBusinessName;
    }

    /**
     * {@inheritdoc}
     */
    public function setRegisteredBusinessName($registeredBusinessName)
    {
        $this->registeredBusinessName = $registeredBusinessName;
    }

    /**
     * {@inheritdoc}
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->companyRegistrationNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setCompanyRegistrationNumber($companyRegistrationNumber)
    {
        $this->companyRegistrationNumber = $companyRegistrationNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getCharityReferenceNumber()
    {
        return $this->charityReferenceNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setCharityReferenceNumber($charityReferenceNumber)
    {
        $this->charityReferenceNumber = $charityReferenceNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getNhsOrganisationCode()
    {
        return $this->nhsOrganisationCode;
    }

    /**
     * {@inheritdoc}
     */
    public function setNhsOrganisationCode($nhsOrganisationCode)
    {
        $this->nhsOrganisationCode = $nhsOrganisationCode;
    }
}
