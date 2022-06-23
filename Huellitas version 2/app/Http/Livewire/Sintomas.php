<?php

namespace App\Http\Livewire;

use App\Models\Sintoma;
use App\Models\Enfermedad;
use Livewire\Component;

class Sintomas extends Component
{
    public $sintomas, $enfermedades;
    public function render()
    {
        $this->enfermedades=Enfermedad::All();
        $this->sintomas=Sintoma::All();
        return view('livewire.sintomas');

    }
}
