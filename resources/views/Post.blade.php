<x-layaouts.app
    title="Post"
    metadescription="Post Master meta description"
>

    <h1>Crear Post</h1>  


    
    @foreach ($posts as $post)

        <a href="{{ route('Post.show', $post) }}"><img src="{{ $post->clasi }}"/>

        <h2>{{ $post->nombre }}</h2>

        <h4>con {{ $post->pags }} páginas</h4>

        <p>publicado el {{ $post->created_at }} </p> </a>
        
    @endforeach

</x-layaouts.app>