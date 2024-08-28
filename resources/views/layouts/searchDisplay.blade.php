<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    @yield('navbar')
        <div class="flex flex-row justify-between mt-8 items-start text-gray-500">
        @yield('filter')
    
            <div class="w-[898px]">
                @if (session('message'))
                <div class="bg-black border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                    <p class="font-bold">Notice</p>
                    <p>{{ session('message') }}</p>
                </div>
            @endif
                <h1 class="text-[20px]">Results</h1>
                <p class="text-gray-500">Price and other details may vary based on product size and color.</p>
                @yield('searchResult')
    
            </div>
            <div>
                @yield('sidebarCart')
            </div>
        </div>
   
   <x-footer></x-footer>
</body>
</html>