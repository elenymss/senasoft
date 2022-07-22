@extends('layouts.app')

@section('content')
<div class="container-sm">
    <a href="/registro/create">nuevo</a>
<button class="btn btn-primary" onclick="location.href='{{route('registro.create')}}'">Nuevo</button>

<table class="table table-dark table-responsive table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Documento</th>
        <th scope="col">Tipo</th>
        <th scope="col">Acciones</th>
    </tr> 
    @foreach ($registro as $registro)
    <tr>
        <td> {{$registro->id}} </td>
        <td> {{$registro->numerodocumento}} </td>
        <td> {{$registro->tipo}} </td>
        <td>
            <a href="/registro/{{$registro->id}}/edit" class="btn btn-warning ">Editar</a>
            <form action="{{route('registro.destroy',$registro)}}" method="POST">
                @method('delete')
                @csrf
            <button class="btn btn-danger ">Eliminar</button>
            </form>  

            {{-- kdkkif --}}
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection