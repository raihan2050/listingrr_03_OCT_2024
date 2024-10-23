<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSetting extends Model
{
    use HasFactory;

    protected $table = 'payment_settings';

    protected $fillable = [
        'unique_keyword',
        'name',
        'description',
        'logo',
        'information',
        'status',
    ];

    protected $casts = [
        'information' => 'array',
    ];
}
