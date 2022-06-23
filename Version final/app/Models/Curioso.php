<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curioso extends Model
{
    use HasFactory;
    public function raza(){
        return $this->belongsto(Raza::class);
    }
}
