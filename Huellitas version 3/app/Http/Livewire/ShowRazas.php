<?php

namespace App\Http\Livewire;

use App\Models\Raza;
use Livewire\Component;

class ShowRazas extends Component
{
    public $razas;
    //public $buscador="";
    public $criterio='';

   

    public function render()
    {
        
        $this->razas = Raza::where('raza', 'like', "%".$this->criterio."%")
                        ->orwhere('informa', 'like', "%".$this->criterio."%")->get();
        return view('livewire.show-razas');
    }
  

  




}
