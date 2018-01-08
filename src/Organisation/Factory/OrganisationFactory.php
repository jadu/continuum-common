<?php

namespace Jadu\ContinuumCommon\Organisation\Factory;

use Jadu\ContinuumCommon\Organisation\Model\Organisation;

/**
 * Class OrganisationFactory.
 *
 * @author Jadu Ltd.
 */
class OrganisationFactory
{
    /**
     * @return Organisation
     */
    public function create()
    {
        return new Organisation();
    }
}
