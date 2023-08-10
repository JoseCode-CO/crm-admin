@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulario de Registro</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>
                            <div class="mb-3">
                                <label for="escuela" class="form-label">Escuela</label>
                                <select class="form-control" id="escuela" name="escuela">
                                    <!-- Opciones para las escuelas (se pueden cargar desde la base de datos) -->
                                    <option value="1">Escuela 1</option>
                                    <option value="2">Escuela 2</option>
                                    <option value="3">Escuela 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="fecha-nacimiento" class="form-label">Fecha de Nacimiento <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="fecha-nacimiento" name="fecha-nacimiento"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="ciudad-natal" class="form-label">Ciudad Natal</label>
                                <input type="text" class="form-control" id="ciudad-natal" name="ciudad-natal">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
