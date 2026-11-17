<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    private array $estudiantes = [
        1 => ['id' => 1, 'nombre' => 'Carlos Pérez', 'ficha' => '2670123', 'nota' => 4.5],
        2 => ['id' => 2, 'nombre' => 'Ana Gómez', 'ficha' => '2670123', 'nota' => 2.8],
        3 => ['id' => 3, 'nombre' => 'Luis Rodríguez', 'ficha' => '2670123', 'nota' => 3.5],
        4 => ['id' => 4, 'nombre' => 'María Torres', 'ficha' => '2670123', 'nota' => 2.4],
        5 => ['id' => 5, 'nombre' => 'Jorge Ramírez', 'ficha' => '2670123', 'nota' => 4.0],
    ];

    public function index()
    {
        return view('estudiantes.index', [
            'estudiantes' => $this->estudiantes
        ]);
    }

    public function show($id)
    {
        $estudiante = $this->estudiantes[$id] ?? null;

        if (!$estudiante) {
            abort(404, 'Estudiante no encontrado');
        }

        return view('estudiantes.show', compact('estudiante'));
    }
}
