<x-header-component></x-header-component>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-gray-700">Select a Shipping Address</h1>

        <form action="" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="full-name" name="full_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="address-line-1" class="block text-sm font-medium text-gray-700">Address Line 1</label>
                <input type="text" id="address-line-1" name="address_line_1" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="address-line-2" class="block text-sm font-medium text-gray-700">Address Line 2</label>
                <input type="text" id="address-line-2" name="address_line_2" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" id="city" name="city" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="state" class="block text-sm font-medium text-gray-700">State/Province/Region</label>
                <input type="text" id="state" name="state" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <input type="text" id="country" name="country" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" id="phone-number" name="phone_number" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md hover:bg-indigo-700 transition">Continue</button>
            </div>
        </form>
    </div>
    
</body>
</html>
