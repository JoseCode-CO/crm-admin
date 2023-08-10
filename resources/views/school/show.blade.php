@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $school->name }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $school->logotipo) }}" alt="{{ $school->nombre }}" class="img-fluid rounded">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Dirección:</strong> {{ $school->adress }}</p>
                            <p><strong>Correo Electrónico:</strong> {{ $school->email }}</p>
                            <p><strong>Teléfono:</strong> {{ $school->phone }}</p>
                            <p><strong>Página Web:</strong> <a href="{{ $school->website }}">{{ $school->pagina_web }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('schools.index') }}" class="btn btn-secondary">Volver a la Lista</a>
                    <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display: inline-block;">
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
