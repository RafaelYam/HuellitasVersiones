<div>
    {{-- The Master doesn't talk, he acts. --}}
    @foreach ($sintomas as $sintoma)
        <ul><button class="btn">{{$sintoma->descripcion}}</button></ul>
    @endforeach
</div>
