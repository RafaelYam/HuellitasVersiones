<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use App\Models\Raza;
use App\Models\Animal;

use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function create(){
        $animal=Animal::All();
        $animal2=Raza::All();
        return view('CRUDMascota.registrar',['animal'=>$animal,'animal2'=>$animal2]);
    }
 
    public function store(Request $request){
        $datos= new Mascota();
        $datos -> nombre = $request->nombre;
        $datos -> raza_id = $request->raza;
        $datos -> sexo = $request->sexo;
        $datos -> user_id=Auth()->user()->id;
        $datos -> edad = $request->edad;
        $datos->save(   );
        $usuario = Auth()->user();
        
        $mascota = Mascota::where('user_id',$usuario->id)->get();
        $animal = animal::where('id',$mascota->raza_id)->get();
        return view('perfil',['user'=>$usuario, 'mascota'=>$mascota, 'animal'=>$animal]);
    }

    public function perfil(){
        $usuario = Auth()->user();
        
        $mascota = Mascota::where('user_id',$usuario->id)->get();
        //$animal = Raza::where('id',$mascota->raza_id)->get();
        return view('perfil',['user'=>$usuario, 'mascota'=>$mascota]);
    }

    public function lista(){
        $animalc = Animal::all();
        
        $razat = Raza::all();
        return view('lista.animal',[ 'animalc'=>$animalc, 'razat'=>$razat]);
    }

    public function verinfo($id){
        $mascota=Raza::find($id);
        return view('info.informacion',compact('mascota'));
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
}
