<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';
    protected $fillable = [
        'image',
        'name',
        'email',
        'password',
        'mobile',
        'address',
        'institution',
        'country',
    ];
}
