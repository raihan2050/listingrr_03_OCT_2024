<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('isSuperAdmin')) {
    function isSuperAdmin()
    {
        $user = Auth::user();
        return $user && $user->is_admin === 1;
    }
}

