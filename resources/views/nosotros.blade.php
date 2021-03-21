@extends('template')
@section('seccion')
<div>
    <h1>Esta es parte de la familia</h1>
    @foreach ($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach

    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre == 'Heiberg')
                <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, quae iste. Consectetur amet quo nobis nesciunt, dolorum distinctio ea earum.</p>
                @break
            @case($nombre == 'Thais')
                <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, quae iste. Consectetur amet quo nobis nesciunt, dolorum distinctio ea earum.</p>
                @break
            @case($nombre == 'Donhis')
                <h2 class="mt-5">El nombre es: {{$nombre}}</h2>
                <p>{{$nombre}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, quae iste. Consectetur amet quo nobis nesciunt, dolorum distinctio ea earum.</p>
                @break
            @default
                
        @endswitch
    @endif
</div>
@endsection