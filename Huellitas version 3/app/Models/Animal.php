<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adiestracion;

class Animal extends Model
{
    use HasFactory;
    public function raza(){
        return $this->hasMany(Raza::class);
    }
    public function adiestracions(){
        return $this->belongsto(Adiestracion::class);
    }
    protected $fillable = ['id','tipo'];
    

}
