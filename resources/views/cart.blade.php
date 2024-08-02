<x-header-components></x-header-components>
<x-nav-bar-components></x-nav-bar-components>
    <body class="text-gray-500">
        <div class="flex flex-row">
            <div class="w-3/4 border border-black flex-col">
                <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>
                <div class="flex flex-row items-end justify-end mr-10 mt-[-40px]">
                    <h2>Price</h2>
                </div>
                <div class="relative flex flex-row border-t border-r-2 border-b border-black m-5 p-6 items-start justify-start">
                    <div class="flex flex-row mr-4">
                        <input class="form-checkbox" type="checkbox" name="add" id="add">
                    </div>
                    <div class="mr-4 h-[100px]">
                        <img src="images/b1.jpg" alt="" class="w-24 h-[100px] object-cover">
                    </div>
                    <div>
                        <h2 class="text-lg text-green-500">Echo Spot adjustable stand - white</h2>
                        <p>In stock</p>
                        <p>Quantity: 1</p>
                        <p class="cursor-pointer text-red-500 hover:underline">Delete</p>
                        <p class="cursor-pointer text-blue-500 hover:underline">Save for later</p>
                        <p class="cursor-pointer text-blue-500 hover:underline">Share</p>
                    </div> 
                    <div >
                        <p class="font-bold absolute top-5 right-5 ">Price: $100</p>
                    </div>
                </div>
            </div>
            <aside class="w-1/4 bg-white border border-black rounded p-4 ml-4">
                <h2 class="text-xl font-bold mb-2">Subtotal (1 item): $29374</h2>
                <div class="flex items-center mb-4">
                    <input class="form-checkbox" type="checkbox" name="gift" id="gift">
                    <label for="gift" class="ml-2">This order contains a gift</label>
                </div>
                <button class="w-full bg-green-500 text-white py-2  hover:bg-green-700 rounded-lg">Proceed to checkout</button>
            </aside>
        </div>
    </body>
<footer></footer>
