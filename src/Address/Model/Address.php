<?php

namespace Jadu\ContinuumCommon\Address\Model;

use DateTime;
use Jadu\ContinuumCommon\Address\AddressInterface;
use Jadu\ContinuumCommon\Address\Formatter\AddressSummaryFormatter;

class Address implements AddressInterface
{
    /**
     * @var string
     */
    private $paon;

    /**
     * @var string
     */
    private $saon;

    /**
     * @var string
     */
    private $uprn;

    /**
     * @var string
     */
    private $usrn;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $locality;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $administrativeArea;

    /**
     * @var string
     */
    private $postTown;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var int
     */
    private $easting;

    /**
     * @var int
     */
    private $northing;

    /**
     * @var string
     */
    private $type;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var DateTime
     */
    private $updatedAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    /**
     * Set paon.
     *
     * @param string $paon
     */
    public function setPaon($paon)
    {
        $this->paon = $paon;
    }

    /**
     * Set saon (e.g. flat number).
     *
     * @param string $saon
     */
    public function setSaon($saon)
    {
        $this->saon = $saon;
    }

    /**
     * Set uprn.
     *
     * @param string $uprn
     */
    public function setUprn($uprn)
    {
        $this->uprn = $uprn;
    }

    /**
     * Set usrn.
     *
     * @param string $usrn
     */
    public function setUsrn($usrn)
    {
        $this->usrn = $usrn;
    }

    /**
     * Set street.
     *
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Set locality.
     *
     * @param string $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * Set town.
     *
     * @param string $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * Set administrativeArea.
     *
     * @param string $administrativeArea
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->administrativeArea = $administrativeArea;
    }

    /**
     * Set postTown.
     *
     * @param string $postTown
     */
    public function setPostTown($postTown)
    {
        $this->postTown = $postTown;
    }

    /**
     * Set postCode.
     *
     * @param string $postCode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * Set easting.
     *
     * @param int $easting
     */
    public function setEasting($easting)
    {
        $this->easting = $easting;
    }

    /**
     * Set northing.
     *
     * @param int $northing
     */
    public function setNorthing($northing)
    {
        $this->northing = $northing;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Set createdAt.
     *
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get paon (building number / name).
     *
     * @return string
     */
    public function getPaon()
    {
        return $this->paon;
    }

    /**
     * Get saon.
     *
     * @return string
     */
    public function getSaon()
    {
        return $this->saon;
    }

    /**
     * Get uprn.
     *
     * @return string
     */
    public function getUprn()
    {
        return $this->uprn;
    }

    /**
     * Get usrn.
     *
     * @return string
     */
    public function getUsrn()
    {
        return $this->usrn;
    }

    /**
     * Get street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Get locality.
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Get town.
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Get administrativeArea.
     *
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->administrativeArea;
    }

    /**
     * Get postTown.
     *
     * @return string
     */
    public function getPostTown()
    {
        return $this->postTown;
    }

    /**
     * Get postCode.
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Get easting.
     *
     * @return int
     */
    public function getEasting()
    {
        return $this->easting;
    }

    /**
     * Get northing.
     *
     * @return int
     */
    public function getNorthing()
    {
        return $this->northing;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get createdAt.
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get updatedAt.
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return AddressSummaryFormatter::generateFromAddress($this);
    }
}
