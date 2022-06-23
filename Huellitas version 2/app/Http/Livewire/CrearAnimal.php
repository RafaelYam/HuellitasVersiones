<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrearAnimal extends Component
{
    public $animales;
    public $animalSelected=null;

    public function agregarNuevaRaza(){

    }

    public function render()
    {
        return view('livewire.crear-animal');
    }
}
