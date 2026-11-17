@extends('layouts.app')

@section('contenido')
    <h2>Bienvenido a {{ config('app.name') }}</h2>
    <p>Información del curso configurada:</p>
    <ul>
        <li><strong>Ficha:</strong> {{ config('curso.ficha') }}</li>
        <li><strong>Programa:</strong> {{ config('curso.programa') }}</li>
        <li><strong>Trimestre:</strong> {{ config('curso.trimestre') }}</li>
    </ul>

    <h3>Pruebas rápidas de rutas (Ejercicio 2):</h3>
    <ul>
        <li><a href="{{ route('saludo', ['nombre' => 'Aprendiz']) }}">Ruta Saludo: /saludo/Aprendiz</a></li>
        <li><a href="{{ route('suma', ['a' => 15, 'b' => 25]) }}">Ruta Suma: /suma/15/25</a></li>
        <li><a href="{{ route('acerca') }}">Ruta Acerca: /acerca</a></li>
    </ul>
@endsection
