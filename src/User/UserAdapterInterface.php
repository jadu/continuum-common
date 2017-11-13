<?php

namespace Jadu\ContinuumCommon\User;

/**
 * Interface for User authentication & data source adapters
 * @copyright All Contents (c) 2017 Jadu Ltd.
 * @author Jadu Ltd.
 */
interface UserAdapterInterface
{
    public function authenticate($identity, $credential);

    public function save(UserInterface $user, array $answers = [], $emailUser = true);

    public function updatePassword($userID, $password);

    public function updateAccessLevel($userID, $accessLevel);

    public function sendPassword($identity);

    public function delete($userID);

    public function getNumUsers();

    public function getNumUsersQuery($query);

    public function getNumUsersRecent($interval);

    public function getNumConfirmedUsersRecent($interval);

    public function getAllUsers($orderBy = 'id', $orderDirection = 'ASC');

    public function getAllUsersLimit($offset, $limit, $orderBy = 'id', $orderDirection = 'ASC');

    public function getAllUsersLimitQuery($offset, $limit, $query, $orderBy = 'id', $orderDirection = 'ASC');

    public function getAllUsersLimitRecent($offset, $limit, $interval);

    public function getAllContactableUsers();

    public function getUser($id);

    public function getUserByIdentity($identity);

    public function getUserIdByIdentity($identity);

    public function canRegister();

    public function canUpdate();

    public function canUpdatePassword();

    public function canRemindPassword();

    public function isStandard();

    public function isIdentityEmail();

    public function getLastLoginID($userID);

    public function getSignInURL();

    public function getSignOutURL();

    public function getRegisterURL();

    public function getAccountURL();

    public function getPasswordReminderURL();

    public function getUpdateURL();

    public function getUpdatePasswordURL();

    public function setUserEmailConfirmed($userID);

    public function SetUserEmailUnconfirmed($userID, $email);

    public function isUserEmailConfirmed($userID);

    public function initSession();

    public function performLogout();
}
