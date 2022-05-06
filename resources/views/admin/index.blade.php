@extends('theme.base')

@section('content')

    <div class="container text-center">
        <h1>Listado de preguntas</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Crear pregunta</a>

        @if (Session::has('mensaje'))
            <div class="alert alert-info my-5">
                {{ Session::get('mensaje') }}
            </div>
        @endif
        
        <div class="py-3">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pregunta</th>
                        <th>Número</th>
                        <th>Valor</th>
                        <th>Intensidad</th>
                        <th>Estado</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($admins as $detail)
                    <tr>
                        <td> {{ $detail->id }} </td>
                        <td> {{ $detail->pregunta }} </td>
                        <td> {{ $detail->numero }} </td>
                        <td> {{ $detail->valor }} </td>
                        <td> {{ $detail->intensidad }} </td>
                    @if (@$detail->activo == 0)
                        <td> {{ "Deshabilitado" }} </td>
                    @else
                        <td> {{ "Habilitado" }} </td>    
                    @endif
                        <td>
                            <a href="{{ route('admin.edit', $detail) }}" class="btn btn-warning">Editar</a>
                            
                            <form action="{{ route('admin.destroy', $detail) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro de Eliminar este Cliente')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3"> No hay registros </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if ($admins->count())
        {{ $admins->links() }}
    @endif
@endsection