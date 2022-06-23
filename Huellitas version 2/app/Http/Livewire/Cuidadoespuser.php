<?php

namespace App\Http\Livewire;

use App\Models\Cuidadoespecial;
use App\Models\User;
use Livewire\Component;

class Cuidadoespuser extends Component
{
    public $cuidados, $user_id, $tipocuidado, $descripcion, $veterinario, $contactoveterinario, $validacion, $cuidado_id;
    public $isOpen = 0;

    public function render()
    {
        $this->cuidados = Cuidadoespecial::all();
        return view('livewire.cuidadoespuser');
    }
   
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->tipocuidado = '';
        $this->descripcion = '';
        $this->veterinario = '';
        $this->contactoveterinario = '';
        $this->validacion = '';
        $this->cuidado_id = '';
    }


    public function store()
    {
        $this->validate([
            'tipocuidado' => 'required',
            'descripcion' => 'required',
            'veterinario' => 'required',
            'contactoveterinario' => 'required',
            
        ]);
   
        Cuidadoespecial::updateOrCreate(['id' => $this->cuidado_id], [
            'tipocuidado' => $this->tipocuidado,
            'descripcion' => $this->descripcion,
            'veterinario' => $this->veterinario,
            'contactoveterinario' => $this->contactoveterinario,
            'validacion' => $this->validacion,
            'user_id'=>Auth()->user()->id,
      
        
        ]);
  
        session()->flash('message', 
            $this->cuidado_id ? 'Cuidado actualizado correctamente.' : 'Cuidado creado correctamente.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function edit($id)
    {
        $cuidado = Cuidadoespecial::findOrFail($id);
        $this->cuidado_id = $id;
        $this->tipocuidado = $cuidado->tipocuidado;
        $this->descripcion = $cuidado->descripcion;
        $this->veterinario = $cuidado->veterinario;
        $this->contactoveterinario = $cuidado->contactoveterinario;
        
    
        $this->openModal();
    }

    public function delete($id)
    {
        Cuidadoespecial::find($id)->delete();
        session()->flash('message', 'Cuidado borrado exitosamente.');
    }

}
