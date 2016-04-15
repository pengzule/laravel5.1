<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'user_id','is_active'];
}
