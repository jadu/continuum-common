<?php

namespace Jadu\ContinuumCommon\User\Authentication;

use Symfony\Component\HttpFoundation\Request;

interface AuthenticationAdapterInterface
{
    public function authenticate(Request $request);

    public function canRegister();

    public function canUpdate();

    public function canUpdatePassword();

    public function canRemindPassword();

    public function getSignInURL();

    public function getSignOutURL();

    public function getRegisterURL();

    public function getAccountURL();

    public function getPasswordReminderURL();

    public function getUpdateURL();

    public function getUpdatePasswordURL();

    public function refreshSession();

    public function performLogout();

    public function isLoginAction(Request $request);

    public function getFailedLoginResponseUrl();

    public function getMachineKey();
}
