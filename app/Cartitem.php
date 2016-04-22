<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartitem extends Model
{
    protected $table = 'cart_items';
    protected $primaryKey = 'id';
}
