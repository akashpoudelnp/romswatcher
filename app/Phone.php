<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    
    public function roms()
    {
        return $this->hasMany(Rom::class);
    }
    public function kernels()
    {
        return $this->hasMany(Kernel::class);
    }
}
