@extends('layouts.miapp')
@section('informacion')

<section id="service" class="relative services-area py-120">
  <div class="container">
    <div class="flex">
      <div class="w-full mx-4 lg:w-1/2">
        <div class="pb-10 section-title">
          <h4 class="title">Seleccionar raza para anilizar</h4>
          <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
        </div> <!-- section title -->
        
      </div>
      
    </div>
  </div>
  
<div class="grid grid-cols-3 gap-4 container">
  <div class="w-full  sm:bg-white rounded-lg overflow-hidden  sm:shadow-lg my-5">
    @foreach($animalc as $animal)
    <div class="py-4 sm:shadow-lg">
      <div class="sticky top-0 ...">{{$animal->tipo}}</div>
      <div>
        @foreach ($animal->raza as $raza)
        <div class="container grid grid-cols-5 pt-6 gap-4">
          <div class="...">
          <img class="shrink-0 h-12 w-12 rounded-full" src="{{$raza->foto}}" alt="" />
          </div>
          <div class="col-span-2">
            <strong class="w-12"><a href="{{route('mascota.verinfo', $raza->id)}}"><span>{{$raza->raza}}</span></a></strong>
          </div>
          
        </div>
        @endforeach
        <!-- ... -->
      </div>
    </div><!-- ... -->
    @endforeach
  </div>
  <div class="col-span-2 ...">
    <livewire:show-razas>
  </div>
</div>
</section>


<script>
  $(document).ready(function() {
    $('.collapsible').collapsible();
  });
</script>

<script>
  var openmodal = document.querySelectorAll('.modal-open')
  for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event) {
      event.preventDefault()
      toggleModal()
    })
  }

  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)

  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }

  document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
      isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
      isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
      toggleModal()
    }
  };


  function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
  }
</script>
@endsection