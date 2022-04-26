@extends("layouts.main")
@section("content")
<div class="p-8">
    <form class="w-full flex justify-center flex-col items-start" action="/register" method="POST">
    @csrf
    @method("POST")
    {{-- FORM --}}
    <div class="py-3 flex flex-col gap-2 w-full">
    <label class="font-bold text-gray-900" for="name">Name</label>
    <input class="w-full border border-gray-900 rounded-md" id="name" type="text" name="name">
    <label class="font-bold text-gray-900" for="username">Username</label>
    <input class="w-full border border-gray-900 rounded-md" id="username" type="text" name="username">
    <label class="font-bold text-gray-900" for="email">Email</label>
    <input class="w-full border border-gray-900 rounded-md" id="email" type="email" name="email">
    <label class="font-bold text-gray-900" for="password">Password</label>
    <input class="w-full border border-gray-900 rounded-md" id="password" type="password" name="password">
    </div>
    {{-- SUBMIT BUTTON --}}
    <button class="px-3 py-2 bg-gray-900 text-gray-200 rounded" type="submit">Submit</button>
    </form>
</div>
@endsection
