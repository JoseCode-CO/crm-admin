@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulario de Edición</h4>
                    <a href="{{ route('schools.index') }}" class="btn btn-success btn-sm float-end">Ver Escuelas</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('schools.update', $school->id) }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="name" value="{{ old('name', $school->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="direccion" name="address" value="{{ old('address', $school->address) }}" required>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="logotipo" class="form-label">Logotipo (mínimo 200x200 y no más de 2 MB)</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logotipo" name="logo" accept="image/*">
                            @error('logo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="correo" name="email" value="{{ old('email', $school->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="telefono" name="phone" value="{{ old('phone', $school->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pagina-web" class="form-label">Página Web</label>
                            <input type="url" class="form-control @error('website') is-invalid @enderror" id="pagina-web" name="website" value="{{ old('website', $school->website) }}">
                            @error('website')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
