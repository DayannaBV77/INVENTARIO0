<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    private array $productos = [
        ['id' => 1, 'nombre' => 'Teclado Mecánico RGB', 'precio' => 180000],
        ['id' => 2, 'nombre' => 'Mouse Ergonómico Inalámbrico', 'precio' => 95000],
        ['id' => 3, 'nombre' => 'Monitor Gamer 24" 144Hz', 'precio' => 650000],
    ];

    public function index()
    {
        return view('productos.index', [
            'productos' => $this->productos
        ]);
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Validación básica y recepción de datos con Request
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
        ]);

        return redirect()->route('productos.index')->with('ok', 'Producto "' . $request->input('nombre') . '" guardado exitosamente.');
    }

    public function show(string $id)
    {
        $producto = collect($this->productos)->firstWhere('id', (int) $id);

        if (!$producto) {
            abort(404, 'Producto no encontrado');
        }

        return view('productos.show', compact('producto'));
    }
}
