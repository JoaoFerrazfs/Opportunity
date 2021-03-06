<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientBuy extends Model
{
    use HasFactory;

    protected $casts = [
        'products'=>'array',
        'values' =>'array'
    ];

    protected $guarded = [];
}
