<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_document extends Model
{
    protected $table = 'user_document';
    protected $filtable = ['document', 'description'];
}
