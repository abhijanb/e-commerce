<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Seller Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-700">
    <x-header-component></x-header-component>
    
    <!-- Navigation Bar -->
    
    <nav class="flex justify-between items-center py-2 border-b border-gray-700">
        <div class="flex items-center space-x-4">
            <a href="/" class="flex items-center h-10 text-lg font-bold">
                <span class="text-xl">E-commerce<span class="text-yellow-400">.seller</span></span>
            </a>
            <div class="flex space-x-4">
                <a href="/" class="hover:bg-gray-700 rounded py-2 px-3 text-sm font-semibold">Inventory</a>
                <a href="/" class="hover:bg-gray-700 rounded py-2 px-3 text-sm font-semibold">Pricing</a>
                <a href="/" class="hover:bg-gray-700 rounded py-2 px-3 text-sm font-semibold">Orders</a>
                <a href="/" class="hover:bg-gray-700 rounded py-2 px-3 text-sm font-semibold">Advertising</a>
                <a href="/" class="hover:bg-gray-700 rounded py-2 px-3 text-sm font-semibold">Store</a>
                <a href="/" class="hover:bg-gray-700 rounded py-2 px-3 text-sm font-semibold">Reports</a>
            </div>
        </div>
    </nav>
    <form action="/update/{{ $product->id }}" method="post" class="px-4">
        @csrf
            @method('PUT')
            @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
        <div class="flex flex-col mt-7 border p-4 bg-white">
            <div class="flex border-b pb-4 mb-4">
                <div class="w-1/3">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col ml-6 w-2/3">
                    <a href="#" class="text-blue-500 mb-2">Visit the doubgood Store</a>
                    <textarea name="product_description" cols="30" rows="4" class="border rounded p-2 mb-2">{{ $product->description }}</textarea>
                    <div class="flex flex-row mt-2 items-center">
                        <span class="mr-4">Rating: 4.5/5</span>
                        <span class="mr-4">★★★★☆</span>
                        <span>1,000+ Ratings</span>
                    </div>
                    <input type="number" name="price" class="border rounded p-2 mt-2 text-black w-32" id="price" value="{{ $product->price }}" step="0.01">
                    <div class="mt-2 flex items-center">
                        <label class="mr-2">Coupon:</label>
                        <input type="checkbox" class="mr-2">
                        <p>Apply 20% coupon</p>
                    </div>
                    <div class="mt-2 flex items-center">
                        <button type="button" class="px-4 py-2 bg-yellow-500 text-white rounded mr-2">Redeem</button>
                        <p class="mr-2">Save 6% on 3 select item(s) promo code:</p>
                        <code>SSDUU3QQ</code>
                    </div>
                    <div class="mt-2">
                        <label for="color" class="block">Color</label>
                        <select id="color" name="color" class="border rounded px-2 py-1">
                            <option value="Gold-M">Gold-M</option>
                            <option value="Red">Red</option>
                            <option value="Blue">Blue</option>
                            <option value="Green">Green</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <h3 class="font-semibold mb-2">Product Details</h3>
                        <div id="details-inputs" class="space-y-4">
                            @php
                                $detailsArray = json_decode($product->details, true);
                            @endphp
                            @foreach ($detailsArray as $index => $detail)
                                <div class="flex items-center space-x-2">
                                    <input
                                        type="text"
                                        name="details[{{ $index }}][key]"
                                        class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Detail Key"
                                        value="{{ htmlspecialchars($detail['key']) }}"
                                        required
                                    >
                                    <input
                                        type="text"
                                        name="details[{{ $index }}][value]"
                                        class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Detail Value"
                                        value="{{ htmlspecialchars($detail['value']) }}"
                                        required
                                    >
                                    <button type="button" class="remove-detail bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" id="add-detail" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Add More</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-6">
                <h1 class="text-xl font-bold">Amount</h1>
                <p class="mt-2">This item cannot be shipped to your selected delivery location. Please choose a different delivery location.</p>
                <p class="mt-2">Delivery Location</p>
                <h2 class="mt-2 text-green-500 font-bold">In Stock</h2>
                <section class="mt-2">
                    <label for="quantity" class="block">Quantity:</label>
                    <input type="number" name="quantity" class="border rounded px-2 py-1 mt-1 w-20" value="1">
                </section>
            </div>
            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded self-center">Update</button>
        </div>
    </form>

    <script>
        document.getElementById('add-detail').addEventListener('click', function() {
            const container = document.getElementById('details-inputs');
            const index = container.children.length;
            const div = document.createElement('div');
            div.className = 'flex items-center space-x-2';
            div.innerHTML = `
                <input
                    type="text"
                    name="details[${index}][key]"
                    class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Detail Key"
                    required
                >
                <input
                    type="text"
                    name="details[${index}][value]"
                    class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Detail Value"
                    required
                >
                <button type="button" class="remove-detail bg-red-500 text-white px-2 py-1 rounded">Remove</button>
            `;
            container.appendChild(div);

            div.querySelector('.remove-detail').addEventListener('click', function() {
                div.remove();
            });
        });

        document.querySelectorAll('.remove-detail').forEach(button => {
            button.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });
    </script>
</body>
</html>
