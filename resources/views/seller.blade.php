<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Clone</title>
    <link rel="stylesheet" href="css/style.css">
    <style src='js/app.js'></style>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-500">
    
    <header>
        @php
    $counts = 1;
    $stock = $products->count();
    $outOfStock = 0;
    if ($stock != 0) {
        # code...
        foreach ($products as $product ) {
            // echo $product['stock'];
            if ($product['stock'] === 0) {
                //     # code...
                $outOfStock += 1;
            }
        }
        
        # code...
    }
    @endphp
        <div class="flex justify-start p-4 bg-gray-500 text-white gap-x-5">
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">E-commerce </p><span class="text-white">. seller</span></div></a>
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">Inventary </p></div></a>
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">Pricing </p></div></a>
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">Orders </p></div></a>
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">Advertising</p></div></a>
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">Store</p></div></a>
            <a href="/" ><div class=" h-10 flex justify-center items-center "><p class="">Reports</p></div></a>
        </div>
        
        <div class="container mx-auto px-4 mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <a href="/add-product">
                    <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                        <p class="text-sm font-semibold">Add Product</p>
                    </div>
                </a>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Orders</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Today's Sales</p>
                    <p class="text-2xl font-bold">$0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Buyers Message</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Customers Feedback</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Total Balance</p>
                    <p class="text-2xl font-bold">$0</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Total Product</p>
                    <p class="text-2xl font-bold">{{$stock}}</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">
                    <p class="text-sm font-semibold">Out of Product</p>
                    <p class="text-2xl font-bold">{{$outOfStock}}</p>
                </div>
            </div>
        </div>
        
        <div class="flex flex-row mt-4 px-4">
            <div>
                <h1 class="text-xl font-bold">Deposit Method</h1>
            </div>
        </div>
    </div>
    
</header>

</body>