<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Traemos todas las tareas
        $tasks = Task::all();
        
        // PRUEBA DE FUEGO:
        // Descomenta la siguiente línea (quítale las //).
        // Si al recargar la página ves datos en pantalla negra, 
        // significa que SÍ hay datos y el error era otra cosa.
        // dd($tasks); 

        // Enviamos la variable 'tasks' a la vista
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    //  Validación de los datos del formulario
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    //  Crear la tarea usando mass assignment
    Task::create($validated);

    //  Redirigir al índice con mensaje de éxito
    return redirect()->route('tasks.index')->with('success', 'Tarea creada correctamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            // 'findOrFail': Si el ID no existe, lanza error 404 automáticamente.
        // ¡Mucho mejor que hacer un if(task == null)!
        $task = Task::findOrFail($id); 
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
    //  Validación de los datos
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    //  Actualizar la tarea con los datos validados
    $task->update($validated);

    //  Redirigir al índice con mensaje de éxito
    return redirect()->route('tasks.index')->with('success', 'Tarea actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada');
    }
}
