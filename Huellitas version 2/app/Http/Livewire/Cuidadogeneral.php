<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cuidadouser;

class Cuidadogeneral extends Component
{
    

    public $cuidados, $user_id, $tipocuidado, $descripcion, $cuidado_id;
    public $isOpen = 0;

    public function render()
    {
   
        $this->cuidados = Cuidadouser::all();
        return view('livewire.cuidadogeneral');
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
        $this->cuidado_id = '';
    }


    public function store()
    {
        $this->validate([
            'tipocuidado' => 'required',
            'descripcion' => 'required',
        ]);
   
        Cuidadouser::updateOrCreate(['id' => $this->cuidado_id], [
            'tipocuidado' => $this->tipocuidado,
            'descripcion' => $this->descripcion,
            
            'user_id'=>Auth()->user()->id,
      
        
        ]);
  
        session()->flash('message', 
            $this->cuidado_id ? 'Cuidado actualizado correctamente.' : 'Cuidado creado correctamente.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function edit($id)
    {
        $cuidado = Cuidadouser::findOrFail($id);
        $this->cuidado_id = $id;
        $this->tipocuidado = $cuidado->tipocuidado;
        $this->descripcion = $cuidado->descripcion;
     
        
    
        $this->openModal();
    }

    public function delete($id)
    {
        Cuidadouser::find($id)->delete();
        session()->flash('message', 'Cuidado borrado exitosamente.');
    }
}
