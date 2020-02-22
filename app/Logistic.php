<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    public function displayName()
    {
        return $this->name;
    }
}
