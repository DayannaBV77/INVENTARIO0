@extends('layouts.app')

@section('contenido')
    <h2>Nuevo Producto</h2>

    <form action="{{ route('productos.store') }}" method="POST" style="max-width: 400px;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="nombre" style="display: block; margin-bottom: 5px; font-weight: bold;">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="precio" style="display: block; margin-bottom: 5px; font-weight: bold;">Precio:</label>
            <input type="number" id="precio" name="precio" required style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 4px;">
        </div>

        <button type="submit" class="btn" style="border: none; cursor: pointer; padding: 10px 18px;">Guardar Producto</button>
        <a href="{{ route('productos.index') }}" style="margin-left: 10px; color: #64748b; text-decoration: none;">Cancelar</a>
    </form>
@endsection
