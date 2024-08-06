<x-header-component></x-header-component>

<body class="text-black">
    <x-nav-bar-component></x-nav-bar-component> 
    <div class="overflow-y-auto">
        <table class="border border-gray-300 w-full h-screen">
            <thead>
                <tr class="border border-gray-300 p-2">
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Added at</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @isset($items)
                    @foreach($items as $item)
                    <tr class="border border-gray-300 p-2">
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ asset('storage/' . $item->image) }}" alt="Image"></td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->description }}</td>
                       
                        <td>
                            @php
$detailsArray = json_decode($item->details, true);                                
foreach ($detailsArray as $detail) {
    echo htmlspecialchars($detail['key']) . " = " . htmlspecialchars($detail['value']) . "<br>";
}

                            @endphp
                        </td>
                        
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td><a href="/update/{{$item->id}}"><button class="text-blue-500">Update</button></a></td>
                        <td><a href="/delete"><button class="text-red-500">Delete</button></a></td>
                    </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>

    <x-footer></x-footer>


