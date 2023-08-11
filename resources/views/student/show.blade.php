@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p><strong>Nombre:</strong> {{ $student->first_name }}</p>
                            <p><strong>Apellidos:</strong> {{ $student->last_name }}</p>
                            <p><strong>Escuela:</strong> {{$student->school->name ?? '' }}</p>
                            <p><strong>Ciudad natal:</strong> {{ $student->hometown }}</p>
                            <p><strong>Fecha de nacimiento:</strong>{{ $student->date_of_birth }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Volver a la Lista</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
