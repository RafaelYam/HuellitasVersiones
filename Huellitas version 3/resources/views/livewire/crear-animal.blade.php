<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    aqui crearemos un animal
    <div class="input-field col s12">
    <select wire:model="animalSelected">
        @foreach($animales as $animal)
      <option value="{{$animal->id}}">{{$animal->tipo}}</option>
      @endforeach
    </select>
    <label>Materialize Select</label>
  </div>
  <button data-target="modal1" class="btn modal-trigger">Modal</button>
          

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Nueva raza para {{$animalSelected}}</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

</div>
