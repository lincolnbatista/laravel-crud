<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modelBook extends Model
{
    protected  $table='book'; //

    public  function  relBUsers()
    {
        return $this->hasMany('App\Models\ModelBook', id_user);
    }
}
