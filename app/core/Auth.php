<?php

/**
* 
*/
class Auth
{
	
	public static function setLoginSession($user, $token, $role,$userlevel)
    {
        $_SESSION['usr'] = [
            'user'  => $user,
            'token' => $token,
            'role'  => $role,
            'userlevel' => $userlevel
        ];   
    }
}