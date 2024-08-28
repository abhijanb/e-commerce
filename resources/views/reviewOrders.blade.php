<x-header-component></x-header-component>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
        <form action="" method="POST" class="space-y-6">
            @csrf
            <h1 class="text-2xl font-bold mb-6 text-gray-700">Review your order</h1>

            <!-- Shipping Address Section -->
            <div class="flex justify-between items-center border-b pb-4 mb-4">
                <label class="block text-lg font-medium text-gray-700">Shipping address</label>
                <div class="text-gray-800">
                    <p>John Doe</p>
                    <p>123 Main St</p>
                    <p>Apt 4B</p>
                    <p>Springfield</p>
                    <p>IL</p>
                    <p>62701</p>
                    <p>United States</p>
                    <p>(555) 123-4567</p>
                </div>
                <span class="text-indigo-600 hover:underline cursor-pointer">Change</span>
                <!-- Shipping address details in a column -->
            </div>

            <!-- Payment Method Section -->
            <div class="flex justify-between items-center border-b pb-4 mb-4">
                <label class="block text-lg font-medium text-gray-700">Payment method</label>
                <div class="text-gray-800">
                    <p>Visa ending in 1234</p>
                    <p>Cardholder: John Doe</p>
                    <p>Exp: 12/2024</p>
                </div>
                <span class="text-indigo-600 hover:underline cursor-pointer">Change</span>
                <!-- Payment method details in a column -->
            </div>

            <!-- Gift Cards & Promotional Codes Section -->
            <div class="mb-6">
                <label class="block text-lg font-medium text-gray-700">Gift cards & promotional codes</label>
                <input type="text" name="promo_code" id="promo_code" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your code">
                <button type="submit" class="mt-2 bg-indigo-600 text-white p-2 rounded-md hover:bg-indigo-700 transition">Apply</button>
            </div>
        </form>

        <!-- Place Order Button and Legal Notice -->
        <div class="mt-8">
            <button class="w-full bg-green-600 text-white p-3 rounded-md hover:bg-green-700 transition">Place Your Order</button>
            <p class="text-sm text-gray-600 mt-4">
                By placing your order, you agree to Amazon's <a href="#" class="text-indigo-600 hover:underline">Privacy Notice</a> and <a href="#" class="text-indigo-600 hover:underline">Conditions of Use</a>.
            </p>
        </div>

        <!-- Order Summary Section -->
        <h1 class="text-xl font-bold mt-8">Order Summary</h1>
        <div class="mt-4 space-y-2">
            <div class="flex justify-between">
                <label class="text-gray-700">Items</label>
                <span>$99</span>
            </div>
            <div class="flex justify-between">
                <label class="text-gray-700">Shipping & Handling</label>
                <span>$99</span>
            </div>
            <div class="flex justify-between">
                <label class="text-gray-700">Free Shipping</label>
                <span>$0</span>
            </div>
            <div class="flex justify-between">
                <label class="text-gray-700">Total before tax</label>
                <span>$99</span>
            </div>
            <div class="flex justify-between">
                <label class="text-gray-700">Estimated tax to be collected</label>
                <span>$99</span>
            </div>
            <div class="flex justify-between font-bold text-xl mt-4 border-t pt-4">
                <label class="text-gray-900">Order Total</label>
                <span>$788</span>
            </div>
        </div>
    </div>
</body>
</html>
