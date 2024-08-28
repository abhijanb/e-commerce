
<x-header-component></x-header-component>
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-semibold mb-4">Select a payment method</h2>
    <div class="space-y-4">
      <!-- Existing Credit Card -->
      <div class="flex items-center justify-between border-b pb-4">
        <div class="flex items-center">
          <input type="radio" name="payment" id="card1" checked>
          <label for="card1" class="ml-2">MasterCard ending in 3873</label>
        </div>
        <p>Expires 02/30</p>
      </div>
      <!-- Add new card -->
      <div>
        <label for="new-card" class="block text-gray-600">Add a new card</label>
        <input type="text" id="new-card" class="w-full p-2 border rounded">
      </div>
    </div>
    <!-- Continue Button -->
    <div class="mt-8">
      <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Continue</a>
    </div>
  </div>
  