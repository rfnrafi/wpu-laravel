@extends("layouts.main")
@section("content")
    <div>
        @foreach ($posts as $post )
            <h1>{{$post->title}}</h1>
            <h2>Writed by <a href="/{{$post->user->name}}">{{$post->user->name}}</a>  || <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h2>
            <p>{{$post->excerpt}}</p>
            <a href="/posts/{{$post->slug}}">Read More</a>
        @endforeach
    </div>
@endsection
