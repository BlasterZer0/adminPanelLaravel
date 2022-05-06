@extends('theme.base')

@section('content')

<div class="container text-center">
    @if (isset($admin))
        <h1>Editar Pregunta</h1>
    @else
        <h1>Crear Pregunta</h1>
    @endif

    @if (isset($admin))
        <form action="{{ route('admin.update', $admin) }}" method="POST">
            @method('PUT')
    @else
        <form action="{{ route('admin.store') }}" method="POST">
    @endif
        
        @csrf

        <div class="mb-3">
            <label for="pregunta" class="form-label">Pregunta</label>
            <input type="text" name="pregunta" class="form-control" placeholder="Nombre de la pregunta" value="{{ old('pregunta') ?? @$admin->pregunta}}">
            <p class="form-text"> Escriba el nombre de la pregunta </p>

            @error('pregunta')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="number" name="numero" class="form-control" placeholder="Número de la pregunta" step="0.01" value="{{ old('numero') ?? @$admin->numero}}">
            <p class="form-text"> Escriba el número de la pregunta </p>

            @error('numero')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" name="valor" class="form-control" placeholder="Valor de la pregunta" step="0.01" value="{{ old('valor') ?? @$admin->valor}}">
            <p class="form-text"> Escriba el valor de la pregunta </p>

            @error('valor')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="intensidad" class="form-label">Intensidad</label>
            <input type="number" name="intensidad" class="form-control" placeholder="Intensidad de la pregunta" step="0.01" value="{{ old('intensidad') ?? @$admin->intensidad}}">
            <p class="form-text"> Escriba la intensidad de la pregunta </p>

            @error('intensidad')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="activo" class="form-label">Estado</label>
            <select type="number" name="activo" class="form-control" value="{{ old('activo') ?? @$admin->activo}}">
            @if (isset($admin))
                @if (@$admin->activo == 0)
                    <option value="0" selected>Deshabilitado</option>
                    <option value="1">Habilitado</option>
                @else
                    <option value="0">Deshabilitado</option>
                    <option value="1" selected>Habilitado</option>
                @endif
            @else
                <option value="0">Deshabilitado</option>
                <option value="1">Habilitado</option>
            @endif
            </select>
            <p class="form-text"> Escriba la intensidad de la pregunta </p>

            @error('activo')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        @if (isset($admin))
            <button type="submit" class="btn btn-info">Editar pregunta</button>
        @else
            <button type="submit" class="btn btn-info">Guardar pregunta</button>
        @endif
    </form>

@endsection