<?php

namespace App\Http\Livewire;

use App\Models\Raza;
use Livewire\Component;

class ShowRazas extends Component
{
    public $razas;
    public $criterio='';

   

    public function render()
    {
        
        $this->razas = Raza::where('raza', 'like', "%".$this->criterio."%")
                        ->orwhere('nombrecomun', 'like', "%".$this->criterio."%")->get();
        return view('livewire.show-razas');
    }
}
