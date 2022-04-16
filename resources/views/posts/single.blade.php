@extends("layouts.main")

@section("content")
<h1>
    {{$post->title}}
</h1>
<p>
    {{$post->description}}
</p>

<button onclick="history.back()">Go Back</button>
@endsection
