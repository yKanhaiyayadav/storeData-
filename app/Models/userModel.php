<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'user_data';

    protected $filltable = 
    [
        'name',
        'mobile',
        'age',
        'gender',
        'email',
        'state',
        'dist',
        'pass',
        'pass1',
        'image',
    ];
}
