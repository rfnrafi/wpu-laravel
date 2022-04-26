@extends("layouts.main")

@section("content")

    <section class="">

        {{-- LEFT SIDE --}}
        <div class="bg-gray-50 flex  p-8 flex-col justify-center items-start gap-3">
            <h1 class="font-bold text-gray-900 text-lg">DASHBOARD</h1>
            <ul class="flex flex-col gap-2">
                <li class="group"><a class="font-semibold duration-300 text-gray-800 group-hover:text-gray-500" href="/dashboard/create-post">Create a Post</a></li>
                <li class="group"><a class="font-semibold duration-300 text-gray-800 group-hover:text-gray-500" href="/dashboard/create-post">Create a Category</a></li>
            </ul>
        </div>

        {{-- RIGHT SIDE --}}
        @yield("right-side")
    </section>
@endsection
