<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $table = 'currencies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'country',
        'currency',
        'code',
        'symbol',
        'thousand_separator',
        'decimal_separator',
        'is_default',
    ];

    protected $casts = [
        'is_default' => 'boolean',
    ];
}
