<?php

namespace Jadu\ContinuumCommon\Address\Model;

use Jadu\ContinuumCommon\Address\AddressHydratorInterface;
use Jadu\ContinuumCommon\Address\AddressSummaryInterface;
use Jadu\ContinuumCommon\Address\Formatter\AddressSummaryFormatter;

class Address implements AddressHydratorInterface, AddressSummaryInterface
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
    private $postTown;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $administrativeArea;

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
    private $uprn;

    /**
     * @var string
     */
    private $usrn;

    /**
     * @var string
     */
    private $externalReference;

    /**
     * {@inheritdoc}
     */
    public function setPaon($paon)
    {
        $this->paon = $paon;
    }

    /**
     * {@inheritdoc}
     */
    public function setSaon($saon)
    {
        $this->saon = $saon;
    }

    /**
     * {@inheritdoc}
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * {@inheritdoc}
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostTown($postTown)
    {
        $this->postTown = $postTown;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->administrativeArea = $administrativeArea;
    }

    /**
     * {@inheritdoc}
     */
    public function setEasting($easting)
    {
        $this->easting = $easting;
    }

    /**
     * {@inheritdoc}
     */
    public function setNorthing($northing)
    {
        $this->northing = $northing;
    }

    /**
     * {@inheritdoc}
     */
    public function setUprn($uprn)
    {
        $this->uprn = $uprn;
    }

    /**
     * {@inheritdoc}
     */
    public function setUsrn($usrn)
    {
        $this->usrn = $usrn;
    }

    /**
     * {@inheritdoc}
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
    }

    /**
     * {@inheritdoc}
     */
    public function getPaon()
    {
        return $this->paon;
    }

    /**
     * {@inheritdoc}
     */
    public function getSaon()
    {
        return $this->saon;
    }

    /**
     * {@inheritdoc}
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * {@inheritdoc}
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * {@inheritdoc}
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostTown()
    {
        return $this->postTown;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get administrative area.
     *
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->administrativeArea;
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
     * Get UPRN.
     *
     * @return string
     */
    public function getUprn()
    {
        return $this->uprn;
    }

    /**
     * Get USRN.
     *
     * @return string
     */
    public function getUsrn()
    {
        return $this->usrn;
    }

    /**
     * Get external reference.
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Get address summary.
     *
     * {@inheritdoc}
     */
    public function getSummary()
    {
        return AddressSummaryFormatter::generateFromAddress($this);
    }
}
