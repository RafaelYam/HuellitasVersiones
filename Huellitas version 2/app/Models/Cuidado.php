<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Raza;

class Cuidado extends Model
{
    use HasFactory;

    public function razas(){
        return $this ->belongsToMany(Raza::class);
    }
}
