<?php

namespace Jadu\ContinuumCommon\Address\Contract;

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
}