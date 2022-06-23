<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enfermedad;

class Sintoma extends Model
{
    use HasFactory;

    public function enfermedads(){
        return $this ->belongsToMany(Enfermedad::class);
    }
}
