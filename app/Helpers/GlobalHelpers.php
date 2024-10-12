<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

if (!function_exists('getCurrentLang')) {
    function getCurrentLang()
    {
        return Config::get('app.locale');
    }
}

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
