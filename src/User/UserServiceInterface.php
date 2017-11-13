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
     * Constructor.
     *
     * @param UserAdapterInterface $adapter
     */
    public function __construct(UserAdapterInterface $adapter = null);
    /**
     * Retrieve the singleton instance of the class.
     *
     * @return UserServiceInterface
     */
    public static function getInstance();
    /**
     * Set the adapter.
     *
     * @param UserAdapterInterface $adapter
     */
    public function setAdapter(UserAdapterInterface $adapter);
    /**
     * Get the adapter.
     *
     * @return AdapterInterface
     */
    public function getAdapter();
    /**
     * Inserts a new user and their answers into the database. uses the user service provided in the
     * {@link UserServiceInterface} constructor.
     *
     * @param UserInterface $user instance of class that implements {@link Jadu_Service_User_Interface_User} passed by reference
     * @param array[]string $answers iDs referring to the user's answers
     * @param bool $emailUser whether to email the user
     *
     * @return int
     */
    public function saveUser(UserInterface $user, array $answers = [], $emailUser = true);
    /**
     * Update user password for the user. Uses the user service provided in the
     * {@link UserServiceInterface} constructor.
     *
     * @param int $userID Instance of class that implements {@link Jadu_Service_User_Interface_User}
     * @param string $password The new password as clear text
     */
    public function updateUserPassword($userID, $password);
    /**
     * Update user access level for the user.
     *
     * @param int $userID
     * @param int $accessLevel
     */
    public function updateUserAccessLevel($userID, $accessLevel);
    /**
     * Send the password to the provided email address.
     * uses the user service provided in the {@link UserServiceInterface} constructor.
     *
     * @param string $identity the identity of the user to look up and send the password for
     * @param int $pwMinLength The minimum length of the password. Default is 5
     * @param int $pwMaxLength The maximum length of the password. Default is 8
     */
    public function sendUserPassword($identity, $pwMinLength = 5, $pwMaxLength = 8);
    /**
     * Deletes a user with the specified id. uses the user service provided in the
     * {@link UserServiceInterface} constructor.
     *
     * @param int $userID Id of the user to delete
     */
    public function deleteUser($userID);
    /**
     * Returns the current number of users in the database. uses the user
     * service provided in the {@link UserServiceInterface} constructor.
     *
     * @return int The number of users
     */
    public function getNumUsers();
    /**
     * Returns the number of users who are found with the search string.
     * uses the user service provided in the {@link UserServiceInterface} constructor.
     *
     * @param string $query the term to search for
     *
     * @return int the number of user's found
     */
    public function getNumUsersQuery($query);
    /**
     * Returns the number of users who have registered since
     * the interval specified. uses the user
     * service provided in the {@link UserServiceInterface} constructor.
     *
     * @param int $interval the interval in which to count the users:
     *                           24 = 1 day,
     *                           7 = 1 week,
     *                           30 = 30 days,
     *                           6 = 6 months,
     *                           12 = 1 year
     *
     * @return int the number of users
     */
    public function getNumUsersRecent($interval);
    /**
     * Returns the number of users who have registered since the interval
     * specified and authenticated. uses the user
     * service provided in the {@link UserServiceInterface} constructor.
     *
     * @param int $interval the interval in which to count the users:
     *                           24 = 1 day,
     *                           7 = 1 week,
     *                           30 = 30 days,
     *                           6 = 6 months,
     *                           12 = 1 year
     *
     * @return int the number of users
     */
    public function getNumConfirmedUsersRecent($interval);
    /**
     * Retrieves all of the users. uses the user
     * service provided in the {@link UserServiceInterface} constructor.
     *
     * @param string $orderBy defaults to 'id'
     * @param string $orderDirection defaults to 'ASC'
     *
     * @return UserInterface[]
     */
    public function getAllUsers($orderBy = 'id', $orderDirection = 'ASC');
    /**
     * Retrieves all of the users limited. uses the user
     * service provided in the {@link UserServiceInterface} constructor.
     *
     * @param int $offset the position to start from
     * @param int $limit the number of records to retrieve
     * @param string $orderBy defaults to 'id'
     * @param string $orderDirection defaults to 'ASC'
     *
     * @return UserInterface[]
     */
    public function getAllUsersLimit($offset, $limit, $orderBy = 'id', $orderDirection = 'ASC');
    /**
     * Retrieves a specified number users from the database based on a search
     * term. uses the user service provided in the {@link UserServiceInterface} constructor.
     *
     * @param int $offset the position to start from
     * @param int $limit the number of records to retrieve
     * @param string $query the search term
     * @param string $orderBy defaults to 'id'
     * @param string $orderDirection defaults to 'ASC'
     *
     * @return UserInterface[]
     */
    public function getAllUsersLimitQuery($offset, $limit, $query, $orderBy = 'id', $orderDirection = 'ASC');
    /**
     * Retrieves a specified number users from the database that have
     * registered in the interval specified. uses the user service provided
     * in the {@link UserServiceInterface} constructor.
     *
     * @param int $offset the position to start from
     * @param int $limit the number of records to retrieve
     * @param int $interval the interval in which to get the users:
     *                           24 = 1 day,
     *                           7 = 1 week,
     *                           30 = 30 days,
     *                           6 = 6 months,
     *                           12 = 1 year
     *
     * @return UserInterface[]
     */
    public function getAllUsersLimitRecent($offset, $limit, $interval);
    /**
     * Retrieves all users who have agreed to be contacted by email.
     * uses the user service provided in the {@link UserServiceInterface} constructor.
     *
     * @return int ID of user object that implements {@link sendUserPassword}
     */
    public function getAllContactableUsers();
    /**
     * Returns User for the given internal identitifer.
     *
     * @param int $userID The internal ID of the User
     *
     * @return UserInterface
     */
    public function getUser($userID);
    /**
     * Returns the logged in User.
     *
     * @return UserInterface
     */
    public function getSessionUser();
    /**
     * Checks if a user is registered, if user is registered the user object is populated
     * with user details and returned, else an empty instance of the user object is returned.
     * uses the user service provided in the {@link UserServiceInterface} constructor.
     *
     * @param string $identity Instance of class that implements {@link Jadu_Service_User_Interface_User}
     *
     * @return UserInterface
     */
    public function getUserByIdentity($identity);
    /**
     * Get the ID of the User by the identity value.
     *
     * @param string $identity The identity value, by default the user's email address
     *
     * @return int The unique identifier of the user
     */
    public function getUserIdByIdentity($identity);
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
     * Logs a failed authentication attempt.
     *
     * @param string $identity identity of the user, if known
     * @param int $failurecode the reason for the failure
     */
    public function logFailedAttempt($identity, $failurecode);
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
     * Whether new registrations are excepted. By default the standard
     * Jadu_Service_User_Interface_User implementation will return true.
     *
     * @return bool
     */
    public function canRegisterUser();
    /**
     * Whether user's can update their details from within Jadu. By default
     * the standard Jadu_Service_User_Interface_User implementation will return true.
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
     * Whether user's can change their password from within Jadu. By default
     * the standard Jadu_Service_User_Interface_Authentication implementation
     * will return true.
     *
     * @return bool
     */
    public function canUpdateUserPassword();
    /**
     * Users last login ID.
     *
     * @param int $userID User to get login id for
     *
     * @return int the users last login id
     */
    public function getUserLastLoginID($userID);
    /**
     * Update a user to mark their email as confirmed.
     *
     * @param int $userID
     */
    public function setUserEmailConfirmed($userID);
    /**
     * Update a user to mark their email as unconfirmed.
     *
     * Optionally send an email to the user allowing them to confirm their email.
     *
     * @param int $userID User to update
     * @param bool $email Should email allowing re-confirmation be sent
     */
    public function SetUserEmailUnconfirmed($userID, $email);
    /**
     * Return a boolean value representing whether the user has confirmed their e-mail address.
     *
     * @param int $userID user to check
     *
     * @return bool whether user has confirmed their email
     */
    public function isUserEmailConfirmed($userID);
    /**
     * Calls a non standard method of an implemented external user service.
     *
     * @param string $method Method to call
     * @param array[string]string $parameters Parameters passed to function
     *
     * @return mixed
     */
    public function callNonStandardMethod($method, $parameters = []);
}
