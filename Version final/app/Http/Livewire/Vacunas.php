<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacuna;

class Vacunas extends Component
{
    public $vacunas, $informacion;
    public $mostrar=0;

    public function mount($id){
      
        $this->vacunas = Vacuna::where('animal_id',$id)->get();
        
    }
    public function activar($id){
        $this->informacion="";
        $this->informacion=Vacuna::where('id',$id)->get();
        
        $this->mostrar=true;

    }
    public function render()
    {
        return view('livewire.vacunas');
    }
}
