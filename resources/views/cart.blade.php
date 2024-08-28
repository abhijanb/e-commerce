<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="text-gray-500">
    <x-header-component></x-header-component>
    <x-nav-bar-component></x-nav-bar-component>

    @if (session('message'))
    <div class="bg-black border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p class="font-bold">Notice</p>
        <p>{{ session('message') }}</p>
    </div>
    @endif

    <div class="flex flex-row">
        <div class="w-3/4 border border-black flex-col">
            <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>
            <div class="flex flex-row items-end justify-between mr-10 mt-[-40px]">
                <div>
                    <input class="form-checkbox" type="checkbox" id="select-all">
                    <label for="select-all" class="ml-2">Select All</label>
                </div>
                <h2>Price</h2>
            </div>

            @if ($cartItems)
            @foreach ($cartItems as $product)
            <div class="relative flex flex-row border-t border-r-2 border-b border-black m-5 p-6 items-start justify-start">
                <div class="flex flex-row mr-4">
                    <input class="form-checkbox item-checkbox" type="checkbox" name="add" id="add-{{ $product->id }}" 
                           data-product-id="{{ $product->id }}" 
                           data-product-price="{{ $product->price }}" 
                           data-product-name="{{ $product->name }}"
                           data-product-image="images/b1.jpg" 
                           {{-- data-product-image="{{ $product->image }}"  --}}
                           data-product-quantity="1">
                </div>
                <div class="mr-4 h-[100px]">
                    <img src="images/b1.jpg" alt="{{ $product->name }}" class="w-24 h-[100px] object-cover">
                </div>
                <div>
                    <h2 class="text-lg text-green-500">{{ $product->name }}</h2>
                    <p>{{ $product->stock ? 'In stock' : 'Out of stock' }}</p>
                    <p>Quantity: 1</p>
                    <form action="{{ route('carts.destroy', ['cart' => $product->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="cursor-pointer text-red-500 hover:underline">Delete</button>
                    </form>
                    <p class="cursor-pointer text-blue-500 hover:underline">Save for later</p>
                    <p class="cursor-pointer text-blue-500 hover:underline">Share</p>
                </div>
                <div>
                    <p class="font-bold absolute top-5 right-5">Price: ${{ $product->price }}</p>
                </div>
            </div>
            @endforeach
            @else
            <p class="border border-red-900">No product added to cart <a href="/">shop now</a></p>
            @endif
        </div>

        <aside class="w-1/4 bg-white border border-black rounded p-4 ml-4">
            <h2 class="text-xl font-bold mb-2">Subtotal: $<span id="subtotal">0</span></h2>
            <ul id="selected-items" class="mb-4">
                <!-- Selected items will be displayed here -->
            </ul>
            <div class="flex items-center mb-4">
                <input class="form-checkbox" type="checkbox" name="gift" id="gift">
                <label for="gift" class="ml-2">This order contains a gift</label>
            </div>
            <form action="{{ route('checkout.index') }}">
                <button class="w-full bg-green-500 text-white py-2 hover:bg-green-700 rounded-lg">Proceed to checkout</button>
            </form>
        </aside>
    </div>

    <script>
        let subtotal = 0;
        const selectedItems = [];

        function updateSubtotalAndItems() {
            subtotal = 0;
            selectedItems.length = 0;

            $('.item-checkbox:checked').each(function() {
                const productId = $(this).data('product-id');
                const productPrice = parseFloat($(this).data('product-price'));
                const productName = $(this).data('product-name');
                const productImage = $(this).data('product-image');
                const productQuantity = $(this).data('product-quantity');

                subtotal += productPrice;
                selectedItems.push({ id: productId, name: productName, image: productImage, quantity: productQuantity });
            });

            $('#subtotal').text(subtotal.toFixed(2));

            const itemList = $('#selected-items');
            itemList.empty();
            selectedItems.forEach(item => {
                itemList.append(`
                    <li class="flex items-center mb-2">
                        <img src="${item.image}" alt="${item.name}" class="w-12 h-12 object-cover mr-2">
                        <span>${item.name}</span>
                        <span class="ml-auto">Quantity: ${item.quantity}</span>
                    </li>
                `);
            });
        }

        $('#select-all').on('change', function() {
            const isChecked = $(this).is(':checked');
            $('.item-checkbox').prop('checked', isChecked);
            updateSubtotalAndItems();
        });

        $('.item-checkbox').on('change', function() {
            updateSubtotalAndItems();
        });
    </script>

    <footer></footer>
</body>
</html>
