<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $filable=[
        'nombre',
        'raza',
        'edad',
        'sexo',
    ];

    public function user(){
        return $this->belongsto(User::class);
    }
    public function raza(){
        return $this->belongsto(Raza::class);
    }

}
