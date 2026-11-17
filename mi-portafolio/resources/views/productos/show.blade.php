@extends('layouts.app')

@section('contenido')
    <x-tarjeta>
        <x-slot:titulo>
            Producto: {{ $producto['nombre'] }}
        </x-slot:titulo>

        <p><strong>Identificador:</strong> #{{ $producto['id'] }}</p>
        <p><strong>Precio unitario:</strong> ${{ number_format($producto['precio'], 0, ',', '.') }} COP</p>

        <div style="margin-top: 20px;">
            <a href="{{ route('productos.index') }}" class="btn">← Volver al catálogo</a>
        </div>
    </x-tarjeta>
@endsection
