<?php

namespace App\Http\Controllers;
use App\Models\Recetas;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
   
    public function index()
    {
        $recetas = Recetas::all(); // aqui pasamos todas las recetas mi genteeee 
        //aqui enviamos todas las recetas a la vista 
        return view('recetas.index',compact('recetas'));
    }

    public function create()
    {
        return view('recetas.create');
    }

    
    public function store(Request $request)
{
    $validate = $request ->validate([
        'nombre'=>'required|string|max:100',
        'ingredientes'=>'required|array',
        'ingredientes.*' => 'string', 
        'descripcion'=> 'required|string',
        'chef'=> 'required|string'
    ]);
    Recetas::create($validate);
    return redirect()->route('recetas.index')->with('success', 'Tarea creada correctamente.');

}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    
  
    public function edit(string $id)
    {
        // 'findOrFail': Si el ID no existe, lanza error 404 automáticamente.
        $receta= Recetas::findOrFail($id);
        return view('recetas.edit',compact('receta'));

    }

   
    public function update(Request $request,Recetas $receta)
    {
        $validate = $request->validate([
        'nombre'=>'required|string|max:100',
        'ingredientes'=>'required|array',
        'ingredientes.*' => 'string', 
        'descripcion'=> 'required|string',
        'chef'=> 'required|string'
    ]);

    $receta->update($validate);

    return redirect()->route('recetas.index')->with('success','Recetaa Actualizada papu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $receta = Recetas::findOrFail($id);
        $receta->delete();


        return redirect()->route('recetas.index')->with('success', 'Tarea eliminada'); 
    }
}
