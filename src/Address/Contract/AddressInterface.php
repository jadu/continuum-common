<?php

namespace Jadu\ContinuumCommon\Address\Contract;

use DateTime;

interface AddressInterface extends FormattableAddressInterface, HydratableAddressInterface
{
    /**
     * @var string
     */
    const TYPE_STREET = 'street';

    /**
     * @var string
     */
    const TYPE_PROPERTY = 'property';

    /**
     * Get the CXM address reference.
     *
     * @return string
     */
    public function getReference();

    /**
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * @return int
     */
    public function getVersion();
}
