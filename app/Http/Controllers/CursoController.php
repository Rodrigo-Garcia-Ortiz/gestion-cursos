<?php

namespace App\Http\Controllers;

use App\Models\Curso;

class CursoController extends Controller
{
public function index()
{
// Crear registros de ejemplo
Curso::create([
'nombre' => 'Laravel desde cero',
'profesor' => 'Ana López',
'duracion_horas' => 30,
]);

Curso::create([
'nombre' => 'Desarrollo web con PHP',
'profesor' => 'Carlos Pérez',
'duracion_horas' => 25,
]);

// Obtener los registros
$cursos = Curso::all();

// Enviar los registros a la vista
return view('cursos.index', compact('cursos'));
}
}