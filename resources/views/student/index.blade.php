@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Lista de Escuelas
                    <a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Crear Estudiante</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Escuela</th>
                                <th>Fecha de nacimiento</th>
                                <th>Ciudad natal</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->school->name ?? '' }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->hometown }}</td>
                                    <td>
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Vista Previa</a>
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
