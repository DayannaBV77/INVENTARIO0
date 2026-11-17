@extends('layouts.app')

@section('contenido')
    <h2>Acerca de este proyecto</h2>
    <p>Proyecto desarrollado como solución a la guía de ejercicios prácticos de Laravel.</p>
    <p><strong>Programa:</strong> {{ config('curso.programa') }}</p>
    <p><strong>Ficha:</strong> {{ config('curso.ficha') }}</p>
@endsection
