<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Mascota extends Model
{
    use HasFactory;

    protected $filable=[
        'nombre',
        'raza',
        'edad',
        'sexo',
        'vacuna'
    ];

    public function user(){
        return $this->belongsto(User::class);
    }
    public function raza(){
        return $this->belongsto(Raza::class);
    }

    public function animal(){
        return $this->belongsto(Animal::class);
    }

}
