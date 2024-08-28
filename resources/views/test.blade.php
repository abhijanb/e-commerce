<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form with Back Button</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navigation Links for Steps -->
    <nav class="flex justify-center space-x-6 my-8">
        <a href="#" class="step-link text-blue-600 font-semibold">1. Cart</a>
        <a href="#" class="step-link text-gray-500">2. Sign-In</a>
        <a href="#" class="step-link text-gray-500">3. Shipping Address</a>
        <a href="#" class="step-link text-gray-500">4. Shipping Options</a>
        <a href="#" class="step-link text-gray-500">5. Payment Method</a>
        <a href="#" class="step-link text-gray-500">6. Review Order</a>
    </nav>

    <!-- Multi-Step Forms -->
    <div class="container mx-auto px-4 py-6">

        <!-- Step 1: Cart -->
        <div id="step-1" class="step-form">
            <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>
            <!-- Cart Content -->
            <div class="bg-white p-4 rounded shadow-lg">
                <!-- Product Item -->
                <div class="flex justify-between items-center border-b pb-4">
                    <div>
                        <p>All-new Echo (2nd Generation)</p>
                        <p class="text-sm text-gray-500">Sandstone Fabric</p>
                    </div>
                    <div>
                        <span class="text-lg font-bold">$99.99</span>
                    </div>
                </div>
                <!-- Next Button -->
                <div class="mt-8 flex justify-end">
                    <button onclick="showNextStep(2)" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Proceed to Sign-In</button>
                </div>
            </div>
        </div>

        <!-- Step 2: Sign-In -->
        <div id="step-2" class="step-form hidden">
            <h2 class="text-2xl font-semibold mb-4">Sign In</h2>
            <!-- Sign-In Form -->
            <form>
                <div class="bg-white p-4 rounded shadow-lg space-y-4">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-600">Email:</label>
                        <input type="email" id="email" class="w-full p-2 border rounded" required>
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-gray-600">Password:</label>
                        <input type="password" id="password" class="w-full p-2 border rounded" required>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="flex justify-between">
                        <button type="button" onclick="showNextStep(1)" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back</button>
                        <button type="button" onclick="showNextStep(3)" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Continue to Shipping Address</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Step 3: Shipping Address -->
        <div id="step-3" class="step-form hidden">
            <h2 class="text-2xl font-semibold mb-4">Shipping Address</h2>
            <!-- Shipping Address Form -->
            <form>
                <div class="bg-white p-4 rounded shadow-lg space-y-4">
                    <div>
                        <label for="address" class="block text-gray-600">Address Line 1:</label>
                        <input type="text" id="address" class="w-full p-2 border rounded" required>
                    </div>
                    <div>
                        <label for="city" class="block text-gray-600">City:</label>
                        <input type="text" id="city" class="w-full p-2 border rounded" required>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="flex justify-between">
                        <button type="button" onclick="showNextStep(2)" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back</button>
                        <button type="button" onclick="showNextStep(4)" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Continue to Shipping Options</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Step 4: Shipping Options -->
        <div id="step-4" class="step-form hidden">
            <h2 class="text-2xl font-semibold mb-4">Shipping Options</h2>
            <!-- Shipping Options Content -->
            <div class="bg-white p-4 rounded shadow-lg">
                <div class="flex justify-between items-center border-b pb-4">
                    <div>
                        <input type="radio" name="shipping" id="option1" checked>
                        <label for="option1" class="ml-2">FREE Two-Day Shipping</label>
                    </div>
                    <p class="text-green-600 font-semibold">Free</p>
                </div>
                <!-- Navigation Buttons -->
                <div class="mt-8 flex justify-between">
                    <button onclick="showNextStep(3)" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back</button>
                    <button onclick="showNextStep(5)" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Continue to Payment Method</button>
                </div>
            </div>
        </div>

        <!-- Step 5: Payment Method -->
        <div id="step-5" class="step-form hidden">
            <h2 class="text-2xl font-semibold mb-4">Payment Method</h2>
            <!-- Payment Method Form -->
            <form>
                <div class="bg-white p-4 rounded shadow-lg space-y-4">
                    <div>
                        <input type="radio" name="payment" id="card1" checked>
                        <label for="card1" class="ml-2">MasterCard ending in 3873</label>
                    </div>
                    <div>
                        <label for="new-card" class="block text-gray-600">Add a new card:</label>
                        <input type="text" id="new-card" class="w-full p-2 border rounded">
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="flex justify-between">
                        <button type="button" onclick="showNextStep(4)" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back</button>
                        <button type="button" onclick="showNextStep(6)" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Review Your Order</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Step 6: Review Order -->
        <div id="step-6" class="step-form hidden">
            <h2 class="text-2xl font-semibold mb-4">Review Your Order</h2>
            <!-- Order Summary -->
            <div class="bg-white p-4 rounded shadow-lg">
                <p>Estimated delivery: Nov 6 - Nov 9, 2024</p>
                <p class="mt-2">Shipping to:</p>
                <p class="text-gray-700">123 Main St, New York, NY 10001</p>
                <!-- Navigation Buttons -->
                <div class="mt-8 flex justify-between">
                    <button onclick="showNextStep(5)" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back</button>
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Place Your Order</button>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript to Handle Form Navigation -->
    <script>
        function showNextStep(step) {
            // Hide all forms
            const forms = document.querySelectorAll('.step-form');
            forms.forEach(form => form.classList.add('hidden'));

            // Show the selected form
            document.getElementById(`step-${step}`).classList.remove('hidden');

            // Update navigation links
            const links = document.querySelectorAll('.step-link');
            links.forEach((link, index) => {
                if (index < step) {
                    link.classList.add('text-blue-600', 'font-semibold');
                    link.classList.remove('text-gray-500');
                } else {
                    link.classList.add('text-gray-500');
                    link.classList.remove('text-blue-600', 'font-semibold');
                }
            });
        }
    </script>

</body>

</html>
