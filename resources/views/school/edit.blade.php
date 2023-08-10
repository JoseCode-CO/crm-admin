@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulario de Edicion</h4>
                    <a href="{{ route('schools.index') }}" class="btn btn-success btn-sm float-end">Ver Escuelas</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('schools.store') }}" method="POST" class="row g-3 needs-validation">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre" name="name" value="{{$school->name}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="direccion" name="address" value="{{$school->address}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="logotipo" class="form-label">Logotipo (mínimo 200x200 y no más de 2 MB)</label>
                            <input type="file" class="form-control" id="logotipo" name="logo" accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="email" value="{{$school->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" name="phone" value="{{$school->phone}}">
                        </div>
                        <div class="mb-3">
                            <label for="pagina-web" class="form-label">Página Web</label>
                            <input type="url" class="form-control" id="pagina-web" name="website" value="{{$school->website}}">
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
