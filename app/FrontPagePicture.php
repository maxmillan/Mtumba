<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPagePicture extends Model
{
    public function user(){
        return $this->belongsTo(User::class);

    }
}
