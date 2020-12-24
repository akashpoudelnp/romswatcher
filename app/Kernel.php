<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kernel extends Model
{
    //
    public function phone()
    {
       return $this->belongsTo(Phone::class);
    }
}
