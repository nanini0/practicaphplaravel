<?php

namespace App\Http\Controllers;
use App\Models\Recetas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $recetasDestacadas = Recetas::destacadas()->latest()->take(3)->get();
        
        return view('index',compact('recetasDestacadas'));
    }
}
