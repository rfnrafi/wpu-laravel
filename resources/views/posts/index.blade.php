@extends("layouts.main")
@section("content")
{{-- SEARCH --}}
<div class="p-8 flex justify-center items-center">
    <form method="GET" action="/posts/">
    @csrf
    @method("GET")
    <input value="{{request("search")}}" class="p-3" type="text" name="search">
    <button class="group" type="submit"><span class="px-3 py-3 mt-5 mb-2 border border-gray-800 group-hover:border-transparent group-hover:bg-gray-800 duration-300 group-hover:text-white font-semibold">Search</span></button>
    </form>
</div>
{{-- POSTS --}}
    <section class="p-8">
        <h1 class="text-3xl font-bold my-4">{{$sub_title}}</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-7 ">
            {{-- POST LOOPING HERE --}}
            @foreach ($posts as $post )
            <div class="overflow-hidden grid md:inline-block grid-cols-8 border rounded-lg">
                <img class="col-span-3 h-full w-full h-56 lg:h-60 object-center object-cover" src="https://images.unsplash.com/photo-1650292455645-f9838bee6b75?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                <div class="col-span-5 p-3">
                    <span class="text-sm">{{Date("l jS \of F Y",$post->timestamp)}}</span>
                    <div class="flex my-2">
                        <a class="group" href="/categories/{{$post->category->slug}}"><div class="px-[12px] py-[6px] text-sm bg-gray-500 inline-block text-white rounded font-semibold border border-transparent group-hover:bg-white group-hover:border-gray-500 group-hover:text-black duration-300">{{$post->category->name}}</div></a>
                    </div>
                    <h3 class="text-xl font-semibold leading-6 mt-2 text-gray-900">{{$post->title}}</h3>
                    <h6 class="text-xm my-1 text-gray-800">writed by <a class="font-bold " href="/{{$post->user->username}}">{{$post->user->name}}</a></h6>
                    <p class="text-gray-700">{{$post->excerpt}}</p>
                    <a class="group inline-block" href="/posts/{{$post->slug}}">
                    <div class="px-3 py-3 mt-5 mb-2 border border-gray-800 group-hover:border-transparent group-hover:bg-gray-800 duration-300 group-hover:text-white font-semibold">Read More</div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
