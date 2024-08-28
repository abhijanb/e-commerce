<x-header-component></x-header-component>
<body>
    
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-6 rounded shadow-lg w-96">
            <h2 class="text-xl font-semibold mb-4">Sign In</h2>
            <form action="#" method="POST">
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email:</label>
                    <input type="email" id="email" class="w-full p-2 border rounded" required>
                </div>
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Password:</label>
                    <input type="password" id="password" class="w-full p-2 border rounded" required>
                </div>
                <!-- Submit Button -->
                <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">Sign In</button>
            </form>
        </div>
    </div>
    
</body>
</html>