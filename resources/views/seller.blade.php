<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Clone</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="js/app.js" defer></script>
    @vite('resources/css/app.css')
</head>
<body class=" text-gray-700">

<header class="bg-gray-800 text-white">
    @php
        $stock = $products->count();
        $outOfStock = $products->where('stock', 0)->count();
    @endphp

    <!-- Navigation Bar -->
    <nav class="flex justify-between items-center pl-1 sm:px-4 py-2">
        <div class="flex items-center space-x-4">
            <a href="/" class="flex items-center h-10 ">
                <span class="font-bold  text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">E-commerce<span class="text-yellow-400">.seller</span></span>
            </a>
            <a href="/" class="h-10 flex items-center px-3 hover:bg-gray-700 rounded text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">Inventory</a>
            <a href="/" class="h-10 flex items-center px-3 hover:bg-gray-700 rounded text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">Pricing</a>
            <a href="/" class="h-10 flex items-center px-3 hover:bg-gray-700 rounded text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">Orders</a>
            <a href="/" class="h-10 flex items-center px-3 hover:bg-gray-700 rounded text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">Advertising</a>
            <a href="/" class="h-10 flex items-center px-3 hover:bg-gray-700 rounded text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">Store</a>
            <a href="/" class="h-10 flex items-center px-3 hover:bg-gray-700 rounded text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">Reports</a>
        </div>
    </nav>
</header>

<main class="container mx-auto p-4">
    <!-- Dashboard Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        <!-- Dashboard Items -->
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Open Orders</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Today's Sales</p>
            <span class="text-2xl font-bold">$0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Total Balance</p>
            <span class="text-2xl font-bold">$0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <select name="couponSelect" class="w-full border-gray-300 bg-gray-50 p-2 rounded" onchange="location = this.value;">
                <option value="/add-coupons">Add Coupons</option>
                <option value="/product-with-coupons">Product with Coupons</option>
                <option value="/product-without-coupons">Product without Coupons</option>
            </select>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Seller Reviews</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <a href="/add-product" class="p-4 bg-white shadow rounded-lg hover:bg-gray-100 transition duration-300">
            <span class="text-sm font-semibold">Add Product</span>
        </a>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Orders</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Buyers Message</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Customer Feedback</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Total Products</p>
            <span class="text-2xl font-bold">{{$stock}}</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <p class="font-semibold text-gray-900">Out of Stock</p>
            <span class="text-2xl font-bold">{{$outOfStock}}</span>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="mt-8">
        <h1 class="text-xl font-bold mb-4">Deposit Method</h1>
        <!-- Add deposit method details or content here -->
    </div>
</main>

</body>
</html>
