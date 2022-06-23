<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;
    public function animal(){
        return $this->belongsto(Animal::class);
    }
    public function mascota(){
        return $this->belongsto(Mascota::class);
    }

}
