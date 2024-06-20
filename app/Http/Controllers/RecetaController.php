<?php

namespace App\Http\Controllers;


use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();
        return view('recetas.index', compact('recetas'));
    }

    public function create()
    {
        return view('recetas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        Receta::create($request->all());

        return redirect()->route('recetas.index')->with('success', 'Receta creada correctamente.');
    }

    public function show($id)
    {
        $receta = Receta::findOrFail($id);
        return view('recetas.show', compact('receta'));
    }

    public function edit($id)
    {
        $receta = Receta::findOrFail($id);
        return view('recetas.edit', compact('receta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $receta = Receta::findOrFail($id);
        $receta->update($request->all());

        return redirect()->route('recetas.index')->with('success', 'Receta actualizada correctamente.');
    }

    public function destroy($id)
    {
        $receta = Receta::findOrFail($id);
        $receta->delete();

        return redirect()->route('recetas.index')->with('success', 'Receta eliminada correctamente.');
    }
}
