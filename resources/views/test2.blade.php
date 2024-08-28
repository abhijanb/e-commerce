<x-header-component></x-header-component>
<body>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-semibold mb-4">Select a shipping address</h2>
        <form action="#" method="POST" class="space-y-4">
          <!-- Address fields -->
          <div>
            <label for="address" class="block text-gray-600">Address Line 1</label>
            <input type="text" id="address" class="w-full p-2 border rounded" required>
          </div>
          <div>
            <label for="city" class="block text-gray-600">City</label>
            <input type="text" id="city" class="w-full p-2 border rounded" required>
          </div>
          <!-- Additional fields omitted for brevity -->
          <!-- Submit Button -->
          <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Continue</button>
        </form>
      </div>
      
</body>
</html>