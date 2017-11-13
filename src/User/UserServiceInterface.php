<?php

namespace Jadu\ContinuumCommon\User;

/**
* Provides a number of methods to store, retrieve and edit users.
*
* @copyright All Contents (c) 2017 Jadu Ltd.
* @author Jadu Ltd.
*/
interface UserServiceInterface
{
    /**
     * Retrieve the singleton instance of the class.
     *
     * @return UserServiceInterface
     */
    public static function getInstance();
    /**
     * Get the adapter.
     *
     * @return AdapterInterface
     */
    public function getAdapter();
    /**
     * Returns the logged in User.
     *
     * @return UserInterface
     */
    public function getSessionUser();
    /**
     * Checks whether the identity and credential are correct and if so
     * logs the user in. If e-mail confirmation is turned on then an additional
     * check of the `authenticated` column of `JaduUsers` is made before logging in.
     *
     * If a non-standard authentication service is being used then an internal
     * User will be created for each unique login identity. The internal record
     * is linked to the authentication service by the unique identifier that is returned.
     *
     * @param string $identity The identity value, by default the user's email address
     * @param string $credential The credential value, by default a password string
     *
     * @return AuthenticationResult The authentication result
     */
    public function authenticateUser($identity, $credential, $requireEmailConfirmation = false);
    /**
     * Sets the user session.
     *
     * @param int $userID ID of the user
     */
    public function logSessionIn($userID, $externalID = null);
    /**
     * Logs a user out by destroying the session and then calls adapter specific logout method.
     *
     * @param bool $force Skip XSS checks and force the logout
     *
     * @return bool
     */
    public function logSessionOut($force = false);
    /**
     * Checks if the current session is logged in or not.
     *
     * @return bool True|False if logged in
     */
    public function isSessionLoggedIn();
    /**
     * Returns the session userID.
     *
     * @return mixed The user id
     */
    public function getSessionUserID();
    /**
     * Get the UserID.
     *
     * @return mixed UserID
     */
    public function getSessionKeyForSite();
    /**
     * Returns the session loginID.
     *
     * @return mixed The login id
     */
    public function getSessionLoginID();
    /**
     * Get the LoginID.
     *
     * @return string
     */
    public function getSessionLoginKeyForSite();
    /**
     * Get the LoginID.
     *
     * @return string
     */
    public function getSessionExternalIDKeyForSite();
    /**
     * Whether new registrations are excepted.
     *
     * @return bool
     */
    public function canRegisterUser();
    /**
     * Whether users can update their details from within Jadu.
     *
     * @return bool
     */
    public function canUpdateUser();
    /**
     * Whether users can reset password from within Jadu.
     *
     * @return bool
     */
    public function canRemindPassword();
    /**
     * Whether users can update their password from within Jadu.
     *
     * @return bool
     */
    public function canUpdatePassword();
    /**
     * Whether users can change their password from within Jadu.
     *
     * @return bool
     */
    public function canUpdateUserPassword();
    /**
     * Return a boolean value representing whether the user has confirmed their e-mail address.
     *
     * @param int $userID user to check
     *
     * @return bool whether user has confirmed their email
     */
    public function isUserEmailConfirmed($userID);
}
