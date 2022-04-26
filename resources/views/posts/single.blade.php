@extends("layouts.main")

@section("content")
<div class="w-full">
    <div>
        <!-- TITLE -->
        <div class="p-8">
            <!-- DATE & TIME -->
            <span class="block text-sm text-gray-700">{{Date("l jS \of F Y",$post->timestamp)}}</span>
            <!-- TITLE -->
            <h2 class="text-3xl font-bold text-gray-800">{{$post->title}}</h2>
            <!-- AUTHOR -->
            <h6 class="mt-2 text-gray-800">Writed by <span class="font-bold"><a href="/{{$post->user->username}}">{{$post->user->name}}</a></span></h6>
        </div>
        <!-- IMAGE POST -->
        <div class="w-full overflow-hidden">
            <!-- IMAGE POST -->
            <img class="object-cover object-center max-h-64 md:max-h-96 w-full" src="https://images.unsplash.com/photo-1650292455645-f9838bee6b75?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
        <!-- BODY/DESCRIPTION -->
        <div class="px-8 pt-4 pb-4 mx-auto w-full flex flex-col lg:grid lg:grid-cols-10 gap-5 justify-center">
            <!-- ASIDE -->
            <aside class="col-span-2"></aside>
            <!-- ARTICLE -->
            <article class="mx-auto w-full col-span-5">
                <!-- POST CATEGORY/TAG -->
                <div class="flex mb-3">
                    <a class="group" href="/categories/{{$post->category->slug}}"><div class="px-[12px] py-[6px] text-sm bg-gray-500 inline-block text-white rounded font-semibold border border-transparent group-hover:bg-white group-hover:border-gray-500 group-hover:text-black duration-300">{{$post->category->name}}</div></a>
                </div>
                <div class="my-3 font-bold">
                    <a class="font-bold text-gray-800" href="/posts">Blog</a> > <a class="font-bold text-gray-800" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> > <a class="font-bold text-gray-800" href="">Lorem, ipsum.</a>
                </div>

                {{-- DESCRIPTION PRINT HERE --}}
                <div class="text-base lg:text-lg">{!!$post->description!!}</div>

            </article>
            <!-- ASIDE LATEST POSTS -->
            <aside class="col-span-3 w-full">
                <h3 class="font-semibold text-xl mb-4">Latest Posts</h3>
                <div class="w-full">
                    <a class="grid grid-cols-6 group duration-300 cursor-pointer border border-slate-400 shadow-sm rounded-lg overflow-hidden hover:border-black hover:bg-gray-900">
                        <img class="object-cover object-center w-full h-full col-span-2" src="https://images.unsplash.com/photo-1650292455645-f9838bee6b75?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                        <div class="p-3 w-full flex justify-center flex-col col-span-4">
                            <span class="block text-sm text-gray-800 group-hover:text-gray-300">29 November 2003</span>
                            <h1 class="font-bold group-hover:text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda</h1>
                            <div class="flex items-center w-full justify-end"><span class="text-xm font-semibold group-hover:text-white">Read More >></span></div>
                        </div>

                    </a>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
