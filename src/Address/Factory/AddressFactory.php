<?php

namespace Jadu\ContinuumCommon\Address\Factory;

use Jadu\ContinuumCommon\Address\Model\Address;

/**
 * Class AddressFactory.
 *
 * @author Jadu Ltd.
 */
class AddressFactory
{
    /**
     * @return Address
     */
    public function create()
    {
        return new Address();
    }
}
