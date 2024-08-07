<x-header-component></x-header-component>
<body class="bg-gray-100 text-gray-700">
    @php
        // Provide a default empty collection if $products is null
        
        $stock = $products->count();
        $outOfStock = $products->where('stock', 0)->count();
    @endphp

<x-seller-navbar-components></x-seller-navbar-components> 

<main class="container mx-auto p-4">
    <!-- Dashboard Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        <!-- Dashboard Items -->
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Open Orders</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Today's Sales</p>
            <span class="text-2xl font-bold">$0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Total Balance</p>
            <span class="text-2xl font-bold">$0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <select name="couponSelect" class="w-full border-gray-300 bg-gray-50 p-2 rounded shadow focus:ring-2 focus:ring-blue-500" onchange="location = this.value;">
                <option value="/add-coupons">Add Coupons</option>
                <option value="/product-with-coupons">Product with Coupons</option>
                <option value="/product-without-coupons">Product without Coupons</option>
            </select>
        </div>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Seller Reviews</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <a href="{{route('sellerProductAdd.create')}}" class="p-4 bg-white shadow rounded-lg border border-gray-200 hover:bg-gray-100 transition duration-300">
            <span class="text-sm font-semibold">Add Product</span>
        </a>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Orders</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Buyers Message</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Customer Feedback</p>
            <span class="text-2xl font-bold">0</span>
        </div>
        <a href="/sellerProductAdd">
            <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
                <p class="font-semibold text-gray-900">Total Products</p>
                <span class="text-2xl font-bold">{{$stock}}</span>
            </div>
        </a>
        <div class="p-4 bg-white shadow rounded-lg border border-gray-200">
            <p class="font-semibold text-gray-900">Out of Stock</p>
            <span class="text-2xl font-bold">{{$outOfStock}}</span>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="mt-8">
        <h1 class="text-xl font-bold mb-4 text-gray-800">Deposit Method</h1>
        <!-- Add deposit method details or content here -->
    </div>
</main>

</body>
</html>
