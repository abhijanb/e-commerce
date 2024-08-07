<x-header-component></x-header-component>

<body class="text-gray-900 bg-gray-100">

    <x-seller-navbar-components></x-seller-navbar-components> 

    <div class="container mx-auto p-4">
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Details</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Added at</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Update</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @isset($items)
                        @foreach($items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Image" class="w-24 h-24 object-cover">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->category }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $detailsArray = json_decode($item->details, true);
                                    
                                    @endphp
                                    <div>
        @if(is_array($detailsArray) && !empty($detailsArray))
            @foreach($detailsArray as $details)
            @foreach ($details as $key => $value)
                
            <p><strong>{{ htmlspecialchars($key) }}:</strong> {{ htmlspecialchars($value) }}</p>
            @endforeach
                
            @endforeach
        @else
            <p>No details available.</p>
        @endif
    </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->stock }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->created_at->format('Y-m-d H:i') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('sellerProductAdd.edit', ['sellerProductAdd' => $item->id]) }}" class="text-blue-500 hover:text-blue-700">Update</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('sellerProductAdd.destroy', ['sellerProductAdd' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>

    <x-footer></x-footer>
</body>
