<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-slate-200">
    <div class="sticky top-0">
        @yield('navbar')
    </div>
    @yield('category')
    @yield('footer')
</body>
</html>
