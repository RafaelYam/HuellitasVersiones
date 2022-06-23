<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Adiestracion;

class Adiestracions extends Component
{
    
    public $adiestracions, $informacion;
    public $mostrar=0;

    public function mount($id){
      
        $this->adiestracions = Adiestracion::where('animal_id',$id)->get();
        
    }
    public function activar($id){
        $this->informacion="";
        $this->informacion=Adiestracion::where('id',$id)->get();
        
        $this->mostrar=true;

    }
    public function render()
    {
        return view('livewire.adiestracions');
    }
}
