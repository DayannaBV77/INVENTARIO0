@extends('layouts.app')

@section('contenido')
    <x-alerta />

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
        <h2>Catálogo de Productos</h2>
        <a href="{{ route('productos.create') }}" class="btn">+ Registrar Nuevo Producto</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $prod)
                <tr>
                    <td>{{ $prod['id'] }}</td>
                    <td>{{ $prod['nombre'] }}</td>
                    <td>${{ number_format($prod['precio'], 0, ',', '.') }} COP</td>
                    <td>
                        <a href="{{ route('productos.show', $prod['id']) }}" class="btn">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay productos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
