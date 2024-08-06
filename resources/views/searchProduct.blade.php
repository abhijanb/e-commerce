<x-header-component></x-header-component>
<body>
    <x-nav-bar-component></x-nav-bar-component>
    {{-- @dd($products) --}}
    <div class="flex flex-row justify-between mt-8 items-start text-gray-500">
        <div class="w-[294px] p-1">
            <h1 class="mb-[16px]">Filter</h1>
            <h2 class="font-bold">Department</h2>
            <ul class="ml-3">
                <li>Art</li>
                <li>Biography</li>
                <li>Business</li>
                <li>Children's Book</li>
            </ul>

            <div class="font-bold">Customer Review</div>
            <div class="mb-4">
                <span>Star</span>
            </div>

            <h2 class="font-bold">Deals and Discounts</h2>
            <p>All Discounts</p>

            <h2 class="font-bold">Language</h2>
            <label for="option1">
                <input type="checkbox" id="option1" name="options" value="option1">
                Option 1
            </label><br>
            <label for="option2">
                <input type="checkbox" id="option2" name="options" value="option2">
                Option 2
            </label><br>
            <label for="option3">
                <input type="checkbox" id="option3" name="options" value="option3">
                Option 3
            </label><br>
            <input type="submit" value="Submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">
        </div>

        <div class="w-[898px]">
            <h1 class="text-[20px]">Results</h1>
            <p class="text-gray-500">Price and other details may vary based on product size and color.</p>
            @foreach ($products as $product)
                <form action="/add/{{$product->id}}">
                    <div class="flex flex-row justify-start items-start w-[906px] h-[261px] border border-gray-200 mb-4">
                        <div class="w-[294px] h-[261px] flex justify-center items-center bg-gray-100">
                            <img class="w-auto ml-auto mr-auto mt-auto" src="{{$product->image}}" alt="Product Image">
                        </div>
                        <div class="flex flex-col justify-start items-start w-[604px] h-[218px] p-1">
                            <h1 class="w-[584px] h-[48px]">{{$product->name}}</h1>
                    <div class="flex flex-row  border border-black justify-start w-56">
                        <p class=" h-[18px]">Review Star:</p>
                        <span>stars number</span>
                    </div>
                    <p class="w-[175px] h-[18px]">Total Buyers</p>
                    <p class="w-[49px] h-[35px] text-red-500 text-xl font-bold">{{$product->price}}</p>
                    <a href="">
                        <button class="w-[89px] h-[31px] rounded-xl border border-black mt-2">Add to Cart</button>
                    </a>
                </div>
            </div>
        </form>
            @endforeach

        </div>
        <div>
            <x-cartSideBar></x-cartSideBar>
        </div>
    </div>
    
</body>
<x-footer></x-footer>