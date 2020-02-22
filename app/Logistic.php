<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order', 'logistic_id', 'id');
    }

    public function displayName()
    {
        return $this->name;
    }
}
