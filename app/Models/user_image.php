<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_image extends Model
{
    protected $table = 'user_image';
    protected $filtable = ['image', 'description'];
}
