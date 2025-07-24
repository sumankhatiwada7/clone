<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class followers extends Model
{  
    protected UPDATE_AT=null;
    protected $fillable = ['user_id', 'follower_id'];

    
}
