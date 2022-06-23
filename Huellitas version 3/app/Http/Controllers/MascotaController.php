<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use App\Models\Raza;
use App\Models\Animal;
use App\Models\Alimento;
use App\Models\Adiestracion;
use App\Models\Vacuna;
use App\Models\Curioso;
use App\Models\Sintoma;

use Illuminate\Http\Request;

class MascotaController extends Controller
{

    public function create(){
        $animal=Animal::All();
        $animal2=Raza::All();
        return view('CRUDMascota.registrar',['animal'=>$animal,'animal2'=>$animal2]);
    }
 
    public function store(Request $request){
        
        $datos= new Mascota();
        $datos -> nombre = $request->nombre;
        $datos -> raza_id = $request->raza;
        $datos -> animal_id = $request->especie;
        $datos -> sexo = $request->sexo;
        $datos -> user_id=Auth()->user()->id;
        $datos -> edad = $request->edad;
        $datos->save(   );
        $usuario = Auth()->user();
        
        $mascota = Mascota::where('user_id',$usuario->id)->get();
        
        return view('perfil',['user'=>$usuario, 'mascota'=>$mascota]);
    }

    public function perfil(){
        $usuario = Auth()->user();
        
        $mascota = Mascota::where('user_id',$usuario->id)->get();
        //$animal = Raza::where('id',$mascota->raza_id)->get();
        return view('perfil',['user'=>$usuario, 'mascota'=>$mascota]);
    }

    public function lista(){
        $animalc = Animal::all();
        return view('lista.animal',[ 'animalc'=>$animalc]);
    }
    
    public function cuidado(){
        return view('lista.cuidado');
    }

    public function cuidadogen(){
        return view('lista.cuidadogeneral');
    }

    public function verinfo($id){
        $mascota=Raza::find($id);
        $adiestracion=Adiestracion::all();
        
        $animal=Animal::where('id',$mascota->animal_id)->get();
       
        
        $vacuna=Vacuna::where('animal_id',$mascota->animal_id)->get();
        $curioso=Curioso::where('raza_id',$mascota->id)->get();
      
        return view('info.informacion',compact('mascota','adiestracion','animal','vacuna','curioso'));
    }
    public function show($id){
        $mascota=Mascota::find($id);
        return view('CRUDMascota.show',compact('mascota'));
    }
    public function sintomas($id){
        $mascota=Raza::find($id);
        return view('info.sintomas',compact('mascota'));
    }
    public function enfermarse($id){
        $mascota=Raza::find($id);
        return view('info.enfermarse',compact('mascota'));
    }

   
    public function destroy($id)
    {
        //
        $dato=Mascota::find($id);
        $dato->delete();
        return redirect('/perfil')->with('exito', 'Eliminación exitosa');
    }

    public function editar($id)
    {
        $mascota=Mascota::find($id);
        //dd($mascota);
        $this->authorize('update', $mascota);
        $animal2=Raza::All();
        return view('CRUDMascota.edit',['mascota'=>$mascota,'animal2'=>$animal2]);
    }

    public function update(Request $request, $id){
        $validated=$request->validate([
            'raza'=>'required',
            'edad'=>'required',
            'nombre'=>'required',
            'sexo'=>'required',
        ]);
        $datos=Mascota::find($id);

        //dd($datos);
        $datos -> nombre = $request->nombre;
        $datos -> raza = $request->raza;
        $datos -> sexo = $request->sexo;
        $datos -> edad = $request->edad;
        $datos->save();
        //dd($datos);
        return redirect()->route('mascota.show',$datos->id);
        
    
    }

    public function alimento($id){
        $alimentos=Alimento::where('animal_id',$id)->get();
  
        return view('lista.alimentacion',['alimentos'=>$alimentos]);
    }

    public function enfermedades(){
        $sintomas=Sintoma::All();
        return view('lista.enfermedades',['sintomas'=>$sintomas]);
    }


}
