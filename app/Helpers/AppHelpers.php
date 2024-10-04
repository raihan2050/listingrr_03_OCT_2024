<?php

namespace App\Helpers;

use App\Models\Admin;

class AppHelpers
{
    public static function greeting($name)
    {
        return "Hello, " . $name . "!";
    }
    public static function createSuperAdmin()
    {
        $adminExists = Admin::where('is_admin', 1)->exists();

        if (!$adminExists) {
            Admin::create([
                'id' => 1,
                'is_admin' => 1,
                'name' => 'Super Admin',
                'photo' => null,
                'email' => 'super@admin.com',
                'phone' => null,
                'phone_national' => null,
                'phone_country' => null,
                'phone_hidden' => 0,
                'email_token' => null,
                'phone_token' => null,
                'email_verified_at' => null,
                'phone_verified_at' => null,
                'auth_field' => 'email',
                'provider' => null,
                'provider_id' => null,
                'password' => bcrypt('superadmin'),
                'country_code' => null,
                'language_code' => null,
                'time_zone' => null,
                'dark_mode' => 0,
                'blocked' => 0,
                'last_login_at' => null,
                'latest_update_ip' => null,
                'create_from_ip' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
