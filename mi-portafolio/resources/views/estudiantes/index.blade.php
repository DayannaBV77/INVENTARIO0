@extends('layouts.app')

@section('contenido')
    <h2>Listado de Estudiantes</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ficha</th>
                <th>Nota</th>
                <th>Estado / Observación</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante['id'] }}</td>
                    <td>{{ $estudiante['nombre'] }}</td>
                    <td>{{ $estudiante['ficha'] }}</td>
                    <td><strong>{{ number_format($estudiante['nota'], 1) }}</strong></td>
                    <td>
                        @if($estudiante['nota'] < 3.0)
                            <span class="badge-danger">Plan de mejoramiento</span>
                        @else
                            <span class="badge-success">Aprobado</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('estudiantes.show', $estudiante['id']) }}" class="btn">Ver Detalle</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay estudiantes en la lista.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
