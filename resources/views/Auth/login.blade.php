<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Sign In</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen">
        <form action="/signin" method="POST" class="w-full max-w-sm mx-auto">
            @csrf
            <h1 class="text-center text-xl font-bold mb-6">
                Sign In to Your Account
            </h1>
            
            @if (session('message'))
                <div class="mb-4 text-red-500 text-center">
                    {{ session('message') }}
                </div>
            @endif

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl focus:outline-none focus:shadow-outline" type="submit">
                    Sign In
                </button>
            </div>

            <p class="mt-4 text-center text-gray-600 text-sm">Don't have an account? <a href="/signup" class="text-blue-500">Sign up</a></p>
        </form>
    </div>
</body>
</html>
