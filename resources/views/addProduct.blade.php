<x-header-component></x-header-component>

<body class="bg-gray-100 flex items-center justify-center min-h-screen text-black">
    <div class="bg-white p-8 w-full max-w-lg rounded-lg shadow-lg border ">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Product Form</h1>
        
        <form action="/add-product" method="POST" class="space-y-6" enctype="multipart/form-data">
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
                        <option value="{{ $category->category  }}">{{ $category->category }}</option>
                    @endforeach
                </datalist>
                @error('category')
                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>
       
            <!-- Dynamic Form Fields -->
            @foreach ($columns as $column)
                @if (!in_array($column->Field, ['category', 'id', 'created_at', 'updated_at', 'user']))
                    <div class="form-group">
                        <label for="{{ $column->Field }}" class="block text-sm font-semibold mb-2 text-gray-700">{{ ucfirst($column->Field) }}</label>
                        <input
                            type="{{ $column->Field === 'image' ? 'file' : 'text' }}"
                            id="{{ $column->Field }}"
                            name="{{ $column->Field }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="{{ ucfirst($column->Field) }}"
                            {{ $column->Field === 'image' ? 'required' : 'required' }}
                        >
                        @error($column->Field)
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
            @endforeach
            
            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Submit</button>
        </form>
    </div>
</body>

<footer></footer>
