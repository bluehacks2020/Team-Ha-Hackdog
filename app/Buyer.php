<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function displayName()
    {
        if($this->middle_name !== null) {
            return $this->first_name . ' ' . substr($this->middle_name, 0, 1) . '. ' . $this->last_name;
        }

        return $this->first_name . ' ' . $this->last_name;
    }
}
