<?php

namespace Jadu\ContinuumCommon\Organisation\Model;

use DateTime;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationInterface;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationMembershipInviteInterface;

/**
 * Class OrganisationMembershipInvite.
 *
 * @author Jadu Ltd.
 */
class OrganisationMembershipInvite implements OrganisationMembershipInviteInterface
{
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $userReference;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var OrganisationInterface
     */
    private $organisation;

    public function __construct()
    {
        $this->setCreatedAt(new DateTime());
        $this->setUpdatedAt(new DateTime());
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * {@inheritdoc}
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserReference()
    {
        return $this->userReference;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserReference($userReference)
    {
        $this->userReference = $userReference;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrganisation(OrganisationInterface $organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return self::STATUS_INVITED;
    }
}
