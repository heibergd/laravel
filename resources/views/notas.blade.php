@extends('template')
@section('seccion')
    <div class="container my-4">
        <h1 class="display-4">Notas</h1>
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif
        <form action="{{route ('nota.crear')}}" method="POST">
            @csrf
            @error('nombre')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    El nombre es obligatorio
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('descripcion')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                La descripcion es obligatoria
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
            <input type="text" class="form-control mb-2" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
            <input type="text" class="form-control mb-2" name="descripcion" placeholder="Descripción" value="{{old('descripcion')}}">
            <button type="submit" class="btn btn-primary btn-block">Agregar</button>
        </form>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nota as $item)
                    <tr>
                        <th scope="row">
                            {{$item->id}}
                        </th>
                        <td>
                            <a href="{{route('nota.detalle',$item)}}">
                                {{$item->nombre}}
                            </a>
                        </td>
                        <td>{{$item->descripcion}}</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
@endsection
    
    
