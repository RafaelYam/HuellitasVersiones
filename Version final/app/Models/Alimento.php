<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Raza;

class Alimento extends Model
{
    use HasFactory;
    
    public function raza(){
        return $this ->belongsToMany(Raza::class);
    }
    
}
