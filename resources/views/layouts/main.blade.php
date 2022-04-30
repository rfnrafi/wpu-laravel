<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>LATIHAN | {{$title}}</title>
</head>
<body class="bg-slate-100">
    {{-- NAVBAR --}}
    <div class="w-full">

        <div class="bg-white w-full">
            <div class="max-w-screen-xl mx-auto text-gray-700 flex flex-col lg:flex-row lg:items-center">
                <div class="box-border flex px-6 w-full h-full items-center justify-between py-3">
                    <a class="group" href="/">
                        <p class="font-bold text-lg uppercase">Putsu</p>
                    </a>
                    <div class="lg:hidden">
                        <p class="font-bold">|||</p>
                    </div>
                </div>
                <nav class="box-border px-6 flex flex-col lg:flex-row lg:items-end lg:justify-end pt-2 pb-4 gap-3">
                    <a class="font-semibold text-lg text-gray-600 w-full lg:w-auto" href="/posts"><p class="w-full duration-300 hover:bg-gray-600 hover:text-white px-2 lg:px-4 py-2 rounded-md">Blog</p></a>

                    @guest
                    <a class="font-semibold text-lg text-gray-600 w-full lg:w-auto" href="/register"><p class="w-full duration-300 hover:bg-gray-600 hover:text-white px-2 lg:px-4 py-2 rounded-md">Register</p></a>
                    <a class="font-semibold text-lg text-gray-600 w-full lg:w-auto" href="/login"><p class="w-full duration-300 hover:bg-gray-600 hover:text-white px-4 py-2 rounded-md">Login</p></a>
                    @endguest

                    @auth
                    <a class="font-semibold text-lg text-gray-600 w-full lg:w-auto" href="/login"><p class="w-full duration-300 hover:bg-gray-600 hover:text-white px-4 py-2 rounded-md">{{auth()->user()->name}}</p></a>
                    <a class="font-semibold text-lg text-gray-600 w-full lg:w-auto" href="/dashboard"><p class="w-full duration-300 hover:bg-gray-600 hover:text-white px-4 py-2 rounded-md">Dashboard</p></a>
                    <a class="font-semibold text-lg text-gray-600 w-full lg:w-auto" href="/logout"><p class="w-full duration-300 hover:bg-gray-600 hover:text-white px-4 py-2 rounded-md">Logout</p></a>
                    @endauth

                </nav>
            </div>
        </div>
        {{-- CONTENT --}}
        @yield("content")
</body>
</html>
