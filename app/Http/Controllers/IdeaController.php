<?php

namespace App\Http\Controllers;

use App\Models\Idea; // Importar el modelo Idea si se usará
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Corrección de la importación

class IdeaController extends Controller
{
    public function index()
    {
        // Puedes usar Eloquent para mayor claridad
        $ideas = DB::table('ideas')->get();
        $ideas = Idea::all(); // Reemplazar por DB::table('ideas')->get() si prefieres consultas directas

        // Retornar la vista correctamente
        return view('ideas.index', ['ideas' => $ideas]);
    }
}
