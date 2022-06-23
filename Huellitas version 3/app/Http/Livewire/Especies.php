<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;

class Especies extends Component
{

    public $animals, $tipo, $animal_id;
    public $isOpen = 0;

    public function render()
    {
        $this->animals = Animal::all();
        return view('livewire.especies');
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
        $this->tipo = '';
        $this->animal_id = '';
    }


    public function store()
    {
        $this->validate([
            'tipo' => 'required',
        ]);
   
        Animal::updateOrCreate(['id' => $this->animal_id], [
            'tipo' => $this->tipo
        ]);
  
        session()->flash('message', 
            $this->animal_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        $this->animal_id = $id;
        $this->tipo = $animal->tipo;
    
        $this->openModal();
    }

    public function delete($id)
    {
        Animal::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }


}
