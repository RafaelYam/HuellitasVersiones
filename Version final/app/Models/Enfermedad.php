<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sintoma;

class Enfermedad extends Model
{
    use HasFactory;

    public function sintomas(){
        return $this ->hasMany(Sintoma::class);
    }
}
