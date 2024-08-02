<header-components></header-components>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 w-96 rounded-lg shadow-lg border border-black">
        <h1 class="text-2xl font-bold mb-6 text-center">Product Form</h1>
        <form action="/add-product" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf <!-- Include CSRF token for form security -->
            
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="category" class="block text-sm font-semibold mb-2">Category</label>
                <select id="category" name="category" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                    @foreach ($categorys as $category)
                        <option value="{{ $category['id'] }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
       
            @foreach ($columns as $column)
                @if ($column->Field != 'category' && $column->Field != 'id' && $column->Field != 'created_at' && $column->Field != 'updated_at' && $column->Field != 'user')
                    <div class="form-group">
                        <label for="{{ $column->Field }}" class="block text-sm font-semibold mb-2">{{ $column->Field }}</label>
                        <input
                            type="{{ $column->Field === 'image' ? 'file' : $column->Type }}"
                            id="{{ $column->Field }}"
                            name="{{ $column->Field }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="{{ ucfirst($column->Field) }}"
                            {{ $column->Field === 'image' ? 'required' : 'required' }}
                        >
                    </div>
                @endif
            @endforeach
            
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
        </form>
    </div>
</body>
<footer></footer>
