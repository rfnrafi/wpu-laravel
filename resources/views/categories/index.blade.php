@extends("layouts.main")

@section("content")
    <h1>{{$category->name}}</h1>
    <div>
        @foreach ($category->post as $post )
            <h1>{{$post->title}}</h1>
            <h2>Writed by <span>{{$post->user->name}}</span>  ||  {{$post->category->name}}</h2>
            <p>{{$post->excerpt}}</p>
            <a href="/posts/{{$post->slug}}">Read More</a>
        @endforeach
    </div>
@endsection
