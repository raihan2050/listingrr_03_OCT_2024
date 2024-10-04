<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('isSuperAdmin')) {
    function isSuperAdmin()
    {
        $adminUser = Auth::guard('admin')->user();
        return $adminUser && $adminUser->is_admin === 1;
    }
}

