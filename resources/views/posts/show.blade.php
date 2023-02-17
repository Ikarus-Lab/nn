<x-layaouts.app
    :title="$Post->nombre"
    :metadescription="$Post->nombre"
>

    <h1>{{ $Post->nombre }}</h1>
    
    @for ($x = 1; $x <= $Post->pags + 1 ; $x++)

        <img src="{{URL::asset('media')}}{{('/')}}{{$Post->nombre}}{{('/')}}{{$x}}{{('.jpg')}}">

    @endfor
    
    <br><a href="/Post">regresar</a>

</x-layaouts.app>