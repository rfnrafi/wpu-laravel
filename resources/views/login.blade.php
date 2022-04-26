@extends('layouts.main')

@section("content")
    <form method="POST" action="/login">
        @csrf
        @method("POST")
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <button type="submit">Submit</button>

    </form>
@endsection
