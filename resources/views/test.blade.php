<x-header-component></x-header-component>

<form action="{{ route('sellerProductAdd.update', ['sellerProductAdd' => $product->id]) }}" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    @csrf
    @method('PUT')

    <!-- Category -->
    <div class="mb-4">
        <label for="category" class="block text-gray-700 font-semibold">Category</label>
        <input type="text" id="category" name="category" value="{{ old('category', $product->category) }}" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        @error('category')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Price -->
    <div class="mb-4">
        <label for="price" class="block text-gray-700 font-semibold">Price</label>
        <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        @error('price')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Stock -->
    <div class="mb-4">
        <label for="stock" class="block text-gray-700 font-semibold">Stock</label>
        <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        @error('stock')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-semibold">Description</label>
        <textarea id="description" name="description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description', $product->description) }}</textarea>
        @error('description')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <?php $detailsArray = json_decode($product->details, true);
?>
    <!-- Details -->
    <div id="details-container" class="mb-4">
        <label class="block text-gray-700 font-semibold">Details</label>
        <div id="details-inputs">
            @if(is_array($detailsArray) && !empty($detailsArray))
                @foreach($detailsArray as $index => $detail)
                    @foreach($detail as $key => $value)
                        <div class="flex items-center mb-2">
                            <input
                                type="text"
                                name="details[{{ $index }}][key]"
                                class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Detail Key"
                                value="{{ $key }}"
                                required
                            >
                            <input
                                type="text"
                                name="details[{{ $index }}][value]"
                                class="w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Detail Value"
                                value="{{ $value }}"
                                required
                            >
                            <button type="button" class="remove-detail bg-red-500 text-white px-2 py-1 rounded ml-2">Remove</button>
                        </div>
                    @endforeach
                @endforeach
            @endif
        </div>
        <button type="button" id="add-detail" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Add Detail</button>
    </div>

    <!-- Image -->
    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-semibold">Current Image</label>
        <div class="w-1/3 mb-2">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-auto object-cover">
        </div>
        <label for="image" class="block text-gray-700">New Image (optional)</label>
        <input type="file" name="image" id="image" class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </div>

    <!-- JavaScript for Dynamic Fields -->
    <script>
        document.getElementById('add-detail').addEventListener('click', function() {
            const container = document.getElementById('details-inputs');
            const index = container.children.length;
            const div = document.createElement('div');
            div.className = 'flex items-center mb-2';
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
                <button type="button" class="remove-detail bg-red-500 text-white px-2 py-1 rounded ml-2">Remove</button>
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
</form>
