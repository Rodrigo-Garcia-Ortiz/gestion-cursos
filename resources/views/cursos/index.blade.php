@extends('layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')

<h2>Cursos disponibles</h2>

@foreach ($cursos as $curso)
<article>
<h3>{{ $curso->nombre }}</h3>

<p>Profesor: {{ $curso->profesor }}</p>

<p>
Duración: {{ $curso->duracion_horas }} horas
</p>
</article>

<hr>
@endforeach

@endsection