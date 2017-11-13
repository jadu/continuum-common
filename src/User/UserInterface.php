<?php

namespace Jadu\ContinuumCommon\User;

/**
* Interface for a User entity
*
* @copyright All Contents (c) 2017 Jadu Ltd.
* @author Jadu Ltd.
*/
interface UserInterface
{
    /**
     * Returns the display name for the User, which will vary depending on what
     * information has been provided.
     *
     * @return string
     */
    public function getDisplayName();
}
