<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vino;

class VinoController extends Controller
{
    public function create()
    {
        return view('vinos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'precio' => 'required|numeric|min:0',
        ]);

        $data = $request->all();

        // Asignar bodega_id si está presente en la solicitud, de lo contrario, establecerlo como null
        $data['bodega_id'] = $request->has('bodega_id') ? $request->input('bodega_id') : null;

        Vino::create($data);

        return redirect()->route('vinos.index')
            ->with('success', 'Vino añadido exitosamente.');
    }

    public function destroy(Vino $vino)
    {
        $vino->delete();

        return redirect()->route('vinos.index')
            ->with('success', 'El vino fue eliminado exitosamente.');
    }

    public function show(Vino $vino)
    {
        return view('vinos.show', compact('vino'));
    }
}
