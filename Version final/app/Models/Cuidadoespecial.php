<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cuidadoespecial extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsto(User::class);
    }
    protected $fillable = [ 'user_id', 
    'tipocuidado', 
    'descripcion', 
    'veterinario', 
    'contactoveterinario', 
    'validacion', 
    'user_id',
    'id'];
}
