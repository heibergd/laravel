@extends('template')
@section('seccion')
    <h1>Detalle de Nota:</h1>
    <h4>ID: {{$nota->id}}</h4>
    {{-- <h4>ID Usuario: {{$nota->id_usuario}}</h4> --}}
    <h4>Nombre:{{$nota->nombre}}</h4>
    {{-- <h4>Slug: {{$nota->slug}}</h4> --}}
    {{-- <h4>precio: {{$nota->precio}}</h4>
    <h4>oferta: {{$nota->oferta}}</h4>
    <h4>Inventario: {{$nota->inventario}}</h4> --}}
    <h4>Descripcion: {{$nota->descripcion}}</h4>
    {{-- <h4>Categorias: {{$nota->categorias}}</h4>
    <h4>Etiquetas: {{$nota->etiquetas}}</h4>
    <h4>Estado: {{$nota->estado}}</h4>
    <h4>Fecha: {{$nota->fecha}}</h4>
    <h4>Bloqueda: {{$nota->bloqueada}}</h4>
     --}}
@endsection