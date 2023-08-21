<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPRestriction extends Model
{
    use HasFactory;

    protected $table='ip_restrictions';

    protected $fillable=[
        'ip',
        'country_code',
        'restricted'
    ];
}
