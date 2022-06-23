<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adiestracion;
use App\Models\Alimento;
use App\Models\Cuidado;
use App\Models\Mascota;
use App\Models\Lugar;
use App\Models\Animal;
use App\Models\Curioso;

class Raza extends Model
{
    use HasFactory;

   

    public function alimento(){
        return $this ->belongsToMany(Alimento::class);
    }

    public function lugars(){
        return $this ->belongsToMany(Lugar::class);
    }

    public function cuidados(){
        return $this ->belongsToMany(Cuidado::class);
    }

    public function animal(){
        return $this->belongsto(Animal::class);
    }
    public function mascota(){
        return $this->belongsto(Mascota::class);
    }

    public function vacunas(){
        return $this->belongsto(Vacuna::class);
    }
    public function curioso(){
        return $this->belongsto(Curioso::class);
    }
}
