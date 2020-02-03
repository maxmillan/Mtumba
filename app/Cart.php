<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function picture(){
        return $this->belongsTo(FrontPagePicture::class);
    }
}
