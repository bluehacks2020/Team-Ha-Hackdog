<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function buyer()
    {
        return $this->belongsTo('App\Buyer', 'buyer_id', 'id');
    }

    public function billingAddress()
    {
        return $this->belongsTo('App\Addresses', 'billing_id', 'id');
    }

    public function shippingAddress()
    {
        return $this->belongsTo('App\Addresses', 'shipping_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail', 'order_id', 'id');
    }
}
