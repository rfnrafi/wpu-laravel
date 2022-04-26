@extends('layouts.main')

@section("content")
{{-- MESSAGE --}}

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

    <div>
        <p>INI INDEX</p>
    </div>
@endsection
