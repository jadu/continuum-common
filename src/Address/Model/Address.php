<?php

namespace Jadu\ContinuumCommon\Address\Model;

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
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return string
     */
    public function getSummary()
    {
        return AddressSummaryFormatter::generateFromAddress($this);
    }
}
