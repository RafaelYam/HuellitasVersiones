<?php

namespace App\Http\Livewire;

use App\Models\Sintoma;
use App\Models\Enfermedad;
use Livewire\Component;

class Sintomas extends Component
{
    public $sintomas, $enfermedades, $informacion;

    public $mostrar=0;
    public $mostrarmapa=0;

    public function mount(){
      
        
        $this->sintomas = Sintoma::all();
        
    }
    public function activar($id){
        $this->informacion="";
        $this->informacion=Enfermedad::where('sintoma_id',$id)->get();
       
        $this->mostrarmapa=0;
        $this->mostrar=true;

    }

    public function activarmapa(){
        $this->mostrar=0;
        
        $this->mostrarmapa=true;

    }
    public function render()
    {
        
        return view('livewire.sintomas');

    }
}
