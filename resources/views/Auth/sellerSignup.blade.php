<x-header-component></x-header-component>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white text-gray-500 shadow-lg rounded-lg p-8">
        <form action="/seller" method="POST" class="w-full max-w-sm mx-auto">
            @csrf
            <h1 class="text-center text-xl font-bold mb-6">
                Welcome to ecommerce for selling. You are not a seller at ecommerce. To be a seller, sign up for seller.
            </h1>

            @if (session('success'))
                <div class="mb-4 text-green-500 text-center">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 text-red-500 text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-4">
                <label for="shopname" class="block text-gray-700 text-sm font-bold mb-2">Shop Name</label>
                <input type="text" id="shopname" name="shopname" placeholder="Enter your shop name" value="{{ old('shopname') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('shopname')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="countrycode" class="block text-gray-700 text-sm font-bold mb-2">Country Code</label>
                <select id="countrycode" name="countrycode" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="+1" {{ old('countrycode') == '+1' ? 'selected' : '' }}>+1 USA</option>
                    <option value="+44" {{ old('countrycode') == '+44' ? 'selected' : '' }}>+44 UK</option>
                    <option value="+91" {{ old('countrycode') == '+91' ? 'selected' : '' }}>+91 India</option>
                    <option value="+977" {{ old('countrycode') == '+977' ? 'selected' : '' }}>+977 Nepal</option>
                </select>
                @error('countrycode')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phonenumber" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <input type="tel" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" value="{{ old('phonenumber') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('phonenumber')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl focus:outline-none focus:shadow-outline" type="submit">
                    Sign Up
                </button>
            </div>
        </form>
    </div>
</body>
