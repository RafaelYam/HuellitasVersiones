<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;
use App\Models\Raza;

class Registrar extends Component
{
    
    public $animals, $informacion, $razas;
    public $mostrar=0;

    public function mount(){
      
        $this->informacion = Animal::All();
        
    }
   
    public function activar($id){
        $this->animals="";
        $this->razas="";
        
        $this->animals=Animal::find($id);

        $this->razas=Raza::where('animal_id',$id)->get();
        
        $this->mostrar=true;

    }
    public function render()
    {
        
        return view('livewire.registrar');
    }
}
