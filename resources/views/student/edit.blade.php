@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Editar Estudiante</h4>
                        <a href="{{ route('students.index') }}" class="btn btn-success btn-sm float-end">Ver Estudiantes</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="POST">

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                    id="nombre" name="first_name" value="{{ old('first_name', $student->first_name) }}">
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    id="apellidos" name="last_name" value="{{ old('last_name', $student->last_name) }}">
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="escuela" class="form-label">Escuela</label>
                                <select class="form-control" id="escuela" name="schools_id">
                                    @if (!$student->school)
                                        <option value="">Seleccione una escuela</option>
                                    @endif

                                    @foreach ($schools as $school)
                                        <option value="{{ $school->value }}" {{ optional($student->school)->id == $school->value ? 'selected' : '' }}>
                                            {{ $school->label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="fecha-nacimiento" class="form-label">Fecha de Nacimiento <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                    id="fecha-nacimiento" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ciudad-natal" class="form-label">Ciudad Natal</label>
                                <input type="text" class="form-control" id="ciudad-natal" name="hometown"
                                    value="{{ old('hometown', $student->hometown) }}">
                            </div>
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Actualizar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
