<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Receta;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingredientes.index', compact('ingredientes'));
    }

    public function create()
    {
        $recetas = Receta::all();
        return view('ingredientes.create', compact('recetas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receta_id' => 'required',
            'nombre' => 'required',
            'cantidad' => 'required',
        ]);

        Ingrediente::create($request->all());

        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente creado correctamente.');
    }

    public function show($id)
{
    $ingrediente = Ingrediente::findOrFail($id);
    if ($ingrediente->receta) {
        return view('ingredientes.show', compact('ingrediente'));
    } else {
        return redirect()->route('ingredientes.index')->with('error', 'La receta asociada no existe.');
    }
}


    public function edit($id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $recetas = Receta::all();
        return view('ingredientes.edit', compact('ingrediente', 'recetas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'receta_id' => 'required',
            'nombre' => 'required',
            'cantidad' => 'required',
        ]);

        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->update($request->all());

        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->delete();

        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente eliminado correctamente.');
    }
}
