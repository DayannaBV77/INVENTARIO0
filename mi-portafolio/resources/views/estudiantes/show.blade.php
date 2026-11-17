@extends('layouts.app')

@section('contenido')
    <x-tarjeta>
        <x-slot:titulo>
            Ficha del Estudiante: {{ $estudiante['nombre'] }}
        </x-slot:titulo>

        <p><strong>Identificador interno:</strong> #{{ $estudiante['id'] }}</p>
        <p><strong>Ficha de formación:</strong> {{ $estudiante['ficha'] }}</p>
        <p><strong>Calificación obtenida:</strong> {{ number_format($estudiante['nota'], 1) }}</p>
        <p>
            <strong>Estado:</strong>
            @if($estudiante['nota'] < 3.0)
                <span class="badge-danger">Requiere Plan de Mejoramiento</span>
            @else
                <span class="badge-success">Aprobado satisfactoriamente</span>
            @endif
        </p>

        <div style="margin-top: 20px;">
            <a href="{{ route('estudiantes.index') }}" class="btn">← Volver al listado</a>
        </div>
    </x-tarjeta>
@endsection
