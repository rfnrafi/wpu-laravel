@extends("dashboard.main")

@section("right-side")
<link rel="stylesheet" href="{{asset("trix.css")}}">
<script src="{{asset("trix-core.js")}}"></script>

@if($errors->any())
{{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <div>
        CREATE A POST
        <form action="/posts" method="POST" ectype="multipart/form-data">
            @csrf
            @method("POST")
            <label for="title">Title</label>
            <input name="title" type="text" id="title">

            <label for="category"></label>
            <select name="category_id" id="category">
                @if ($categories)
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                @else
                    <option value="0">THERE ARE NO CATEGORY</option>
                @endif
            </select>

            <label for="image_path">Image</label>
            <input id="image_path" name="image_path" type="file">


            <input id="description" type="hidden" name="description">
            <trix-editor input="description"></trix-editor>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
