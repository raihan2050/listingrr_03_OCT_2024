<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('isSuperAdmin')) {
    function isSuperAdmin()
    {
        $adminUser = Auth::guard('admin')->user();
        return $adminUser && $adminUser->is_admin === 1;
    }
}

if (!function_exists('getSuperUser')) {
    static $superUserDetails = null;

    function getSuperUser()
    {
        global $superUserDetails;

        if ($superUserDetails === null) {
            $superUserDetails = Auth::guard('admin')->user();
        }

        return $superUserDetails;
    }
}

if (!function_exists('getUserDetails')) {
    static $userDetails = null;

    function getUserDetails()
    {
        global $userDetails;

        if ($userDetails === null) {
            $userDetails = Auth::user();
        }

        return $userDetails;
    }
}
