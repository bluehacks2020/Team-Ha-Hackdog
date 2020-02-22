<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * Eloquent Relationships
     */

    public function seller()
    {
        return $this->hasOne('App\Seller', 'id', 'seller_id');
    }
}
