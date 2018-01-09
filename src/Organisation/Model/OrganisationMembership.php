<?php

namespace Jadu\ContinuumCommon\Organisation\Model;

use DateTime;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationInterface;
use Jadu\ContinuumCommon\Organisation\Contract\OrganisationMembershipInterface;

/**
 * Class OrganisationMembership.
 *
 * @author Jadu Ltd.
 */
class OrganisationMembership implements OrganisationMembershipInterface
{
    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var DateTime
     */
    protected $invitedAt;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var OrganisationInterface
     */
    protected $organisation;

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
    public function getInvitedAt()
    {
        return $this->invitedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setInvitedAt(DateTime $invitedAt)
    {
        $this->invitedAt = $invitedAt;
    }
}
