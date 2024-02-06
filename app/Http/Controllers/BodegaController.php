<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;
use App\Models\Vino;

class BodegaController extends Controller
{
    public function index()
    {
        $bodegas = Bodega::all();
        return view('bodegas.index', compact('bodegas'));
    }

    public function show(Bodega $bodega)
    {
        return view('bodegas.show', compact('bodega'));
    }

    public function create()
    {
        return view('bodegas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        Bodega::create($request->all());

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega creada exitosamente.');
    }

    public function edit(Bodega $bodega)
    {
        return view('bodegas.edit', compact('bodega'));
    }

    public function update(Request $request, Bodega $bodega)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $bodega->update($request->all());

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega actualizada exitosamente.');
    }

    public function destroy(Bodega $bodega)
    {
        $bodega->delete();

        return redirect()->route('bodegas.index')
            ->with('success', 'Bodega eliminada exitosamente.');
    }

    public function addVinos(Bodega $bodega)
    {
        $vinosDisponibles = Vino::all();
        return view('bodegas.add-vinos', compact('bodega', 'vinosDisponibles'));
    }

    public function storeVinos(Request $request, Bodega $bodega)
    {
        $request->validate([
            'vinos' => 'required|array|min:1',
            'vinos.*' => 'exists:vinos,id',
        ]);
    
        foreach ($request->vinos as $vinoId) {
            $vino = Vino::findOrFail($vinoId);
            $vino->bodega_id = $bodega->id;
            $vino->save();
        }
    
        return redirect()->route('bodegas.show', $bodega->id)
            ->with('success', 'Los vinos fueron añadidos correctamente a la bodega.');
    }
}
