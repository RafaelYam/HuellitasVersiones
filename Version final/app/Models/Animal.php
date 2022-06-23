<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adiestracion;
use App\Models\Mascota;

class Animal extends Model
{
    use HasFactory;
    public function raza(){
        return $this->hasMany(Raza::class);
    }
    public function mascota(){
        return $this->hasMany(Mascota::class);
    }
    public function adiestracions(){
        return $this->belongsto(Adiestracion::class);
    }
    protected $fillable = ['id','tipo'];
    

}
