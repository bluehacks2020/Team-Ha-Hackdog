<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product', 'seller_id', 'id');
    }

    public function displayName()
    {
        return $this->name;
    }
}
