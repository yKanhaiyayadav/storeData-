<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = 'userdata';

    protected $fillable = [
        'name',
        'mobile',
        'age',
        'gender',
        'email',
        'password',
        'image'
    ];
}
