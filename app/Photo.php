<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function albums(){
        return $this->belongsTo(Album::class);
    }
}
