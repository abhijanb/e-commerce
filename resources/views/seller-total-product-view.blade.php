<x-header-component></x-header-component>
<body class="w-full">
    <x-seller-navbar-components></x-seller-navbar-components>
    <table>
        <thead class="bg-gray-50 w-full">
            <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <th class="px-6 py-3 w-2/6">Name</th>
                <th class="px-6 py-3 w-2/6">Image</th>
                <th class="px-6 py-3 w-1/6">Category</th>
                <th class="px-6 py-3 w-1/6">Description</th>
                <th class="px-6 py-3 w-1/6">Details</th>
                <th class="px-6 py-3 w-1/6">Price</th>
                <th class="px-6 py-3 w-1/6">Stock</th>
                <th class="px-6 py-3 w-1/6">Added at</th>
                <th class="px-6 py-3 w-1/6">Update</th>
                <th class="px-6 py-3 w-1/6">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($items && $items->count() > 0)
                @foreach($items as $item)
                    <tr class="text-gray-500 px-6 py-4 whitespace-nowrap">
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ asset('storage/' . $item->image) }}" alt="Image" class="w-24 h-24 object-cover"></td>
                        <td>{{ $item->category_name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            @php
                                $detailsArray = json_decode($item->details, true);
                            @endphp
                            @if(is_array($detailsArray) && !empty($detailsArray))
                                @foreach($detailsArray as $details)
                                    @foreach ($details as $key => $value)
                                        <p><strong>{{ $key }}:</strong> {{ $value }}</p>
                                    @endforeach
                                @endforeach
                            @else
                                <p>No details available.</p>
                            @endif
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('sellerProductAdd.edit', ['sellerProductAdd' => $item->id]) }}" class="text-blue-500 hover:text-blue-700">Update</a>
                        </td>
                        <td>
                            <form action="{{ route('sellerProductAdd.destroy', ['sellerProductAdd' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10" class="text-center px-6 py-4">No items available.</td>
                </tr>
            @endif
        </tbody>
        
            </table>
        </div>
    </div>
    <x-footer></x-footer>
