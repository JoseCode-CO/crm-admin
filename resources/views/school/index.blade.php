@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Lista de Escuelas
                    <a href="{{ route('schools.create') }}" class="btn btn-success btn-sm float-end">Crear Escuela</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Logotipo</th>
                                <th>Correo Electrónico</th>
                                <th>Teléfono</th>
                                <th>Página Web</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schools as $school)
                                <tr>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->address }}</td>
                                    <td>
                                        @if($school->logotipo)
                                            <img src="{{ asset('storage/' . $school->logotipo) }}" alt="Logotipo" width="50">
                                        @else
                                            Sin logotipo
                                        @endif
                                    </td>
                                    <td>{{ $school->email }}</td>
                                    <td>{{ $school->phone }}</td>
                                    <td>{{ $school->website }}</td>
                                    <td>
                                        <a href="{{ route('schools.show', $school->id) }}" class="btn btn-info btn-sm">Vista Previa</a>
                                        <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display: inline-block;">
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
