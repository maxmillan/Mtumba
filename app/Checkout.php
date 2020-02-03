<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
