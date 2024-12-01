<?php

namespace App\Http\Controllers;

use App\Models\Idea; // Importar el modelo Idea si se usará
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Corrección de la importación
use Illuminate\View\View;

class IdeaController extends Controller
{
    public function index(): View
    {
        // Puedes usar Eloquent para mayor claridad
        $ideas = DB::table('ideas')->get();
        $ideas = Idea::all(); // Reemplazar por DB::table('ideas')->get() si prefieres consultas directas

        // Retornar la vista correctamente
        return view('ideas.index', ['ideas' => $ideas]);
    }



    public function create(): View 
    {
        return view('ideas.create');

    }


    public function store(Request $request)
    {
        dd($request->all());

    }


}
