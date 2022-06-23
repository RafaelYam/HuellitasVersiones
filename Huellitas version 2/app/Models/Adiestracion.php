<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Adiestracion extends Model
{
    use HasFactory;
    public function animal(){
        return $this->belongsToMany(Animal::class, 'adiestracion_animal');
    }
}
