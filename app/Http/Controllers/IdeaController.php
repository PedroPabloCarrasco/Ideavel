<?php

namespace App\Http\Controllers;

use App\Models\Idea; // Importar el modelo Idea si se usará
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\View\View;

class IdeaController extends Controller
{
    public function index(): View
    {
        // Puedes usar Eloquent para mayor claridad
        $ideas = DB::table('ideas')->get(); // Select * from ideas
        $ideas = Idea::all(); 

        // Retornar la vista correctamente
        return view('ideas.index', ['ideas' => $ideas]);
    }



    public function create(): View 
    {
        return view('ideas.create');

    }


    public function store(Request $request)
    {
        //campos validados|Validaciones
        $validated = $request->validate([
            'title' => 'rquired|string|max:100',
            'description' => 'rquired|string|max:300',
        ]);

        Idea::create()([
            'user_id' => $validated['user_id'],
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);


        return redirect()->route('ideas.index');

    }


}
