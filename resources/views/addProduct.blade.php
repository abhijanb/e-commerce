<x-header-component></x-header-component>

<body class="bg-gray-100 flex items-center justify-center min-h-screen text-black">
    <div class="bg-white p-8 w-full max-w-lg rounded-lg shadow-lg border ">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Product Form</h1>
        
        <form action="{{route('sellerProductAdd.store')}}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf <!-- Include CSRF token for form security -->
            
            <!-- Error Messages -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Category Input -->
            <div class="form-group">
                <label for="category" class="block text-sm font-semibold mb-2 text-gray-700">Category</label>
                <input
                    list="categories-list"
                    id="category"
                    name="category"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Select a category"
                    required
                >
                <datalist id="categories-list">
                    @foreach ($categories as $category)
                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                </datalist>
                @error('category')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Name Input -->
            <div class="form-group">
                <label for="name" class="block text-sm font-semibold mb-2 text-gray-700">Product Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Product Name"
                    required
                >
                @error('name')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Price Input -->
            <div class="form-group">
                <label for="price" class="block text-sm font-semibold mb-2 text-gray-700">Price</label>
                <input
                    type="number"
                    id="price"
                    name="price"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Price"
                    required
                >
                @error('price')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Stock Quantity Input -->
            <div class="form-group">
                <label for="stock" class="block text-sm font-semibold mb-2 text-gray-700">Stock Quantity</label>
                <input
                    type="number"
                    id="stock"
                    name="stock"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Stock Quantity"
                    required
                >
                @error('stock')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Description Input -->
            <div class="form-group">
                <label for="description" class="block text-sm font-semibold mb-2 text-gray-700">Description</label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Description"
                >
                @error('description')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            {{-- coupons --}}
            <!-- Coupons Input -->
<div class="form-group">
    <label for="coupons" class="block text-sm font-semibold mb-2 text-gray-700">Coupons</label>
    <input
        type="text"
        id="coupons"
        name="coupons"
        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Coupons"
    >
    @error('coupons')
        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
    @enderror
</div>


            <!-- Details Input Group -->
            <div class="form-group">
                <label class="block text-sm font-semibold mb-2 text-gray-700">Details</label>
                
                <div id="details-inputs" class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <input
                            type="text"
                            name="details[0][key]"
                            class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Detail Key"
                            required
                        >
                        <input
                            type="text"
                            name="details[0][value]"
                            class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Detail Value"
                            required
                        >
                    </div>
                </div>

                <button type="button" id="add-detail" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Add More</button>

                @error('details')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="image" class="block text-sm font-semibold mb-2 text-gray-700">Product Image</label>
                <input
                    type="file"
                    id="image"
                    name="image"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
                @error('image')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Submit</button>
        </form>
    </div>

    <!-- JavaScript to Handle Adding More Detail Inputs -->
    <script>
        document.getElementById('add-detail').addEventListener('click', function() {
            const detailsInputs = document.getElementById('details-inputs');
            const index = detailsInputs.children.length;

            const newDetailHTML = `
                <div class="flex items-center space-x-2">
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
                </div>
            `;

            detailsInputs.insertAdjacentHTML('beforeend', newDetailHTML);
        });
    </script>
</body>

<footer></footer>
