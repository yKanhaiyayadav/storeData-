<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_video extends Model
{
    protected $table = 'user_video';
    protected $filtable = ['video', 'description'];
}
