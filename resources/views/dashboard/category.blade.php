@extends("dashboard.main")

@section("right-side")
<link rel="stylesheet" href="{{asset("trix.css")}}">
<script src="{{asset("trix-core.js")}}"></script>

@if($errors->any())
{{ implode('', $errors->all('<div>:message</div>')) }}
@endif

<div>
    <form method="POST" action="/category">
    @csrf
    @method("POST")

    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    </form>
</div>

@endsection
