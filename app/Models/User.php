<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var boolean
	 */
	public $timestamps = true;

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
		'country_code',
		'language_code',
		'name',
		'photo',
		'auth_field',
		'email',
		'phone',
		'phone_national',
		'phone_country',
		'phone_hidden',
		'password',
		'remember_token',
		// 'can_be_impersonate',
		'create_from_ip',
		'latest_update_ip',
		'provider',
		'provider_id',
		'email_token',
		'phone_token',
		'email_verified_at',
		'phone_verified_at',
		'dark_mode',
		'time_zone',
		'blocked',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
		return [
			'email_verified_at' => 'datetime',
			'phone_verified_at' => 'datetime',
			'created_at'        => 'datetime',
			'updated_at'        => 'datetime',
			'last_login_at'     => 'datetime',
			'password' => 'hashed',
		];
    }
}
