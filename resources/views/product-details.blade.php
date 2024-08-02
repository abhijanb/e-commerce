<x-head></x-head>
<x-header></x-header>
<x-navbar></x-navbar>
<body>
    <div class="flex flex-col mt-7">
        <div class="flex justify-between">
            <div class="w-[422px] h-[423px]">
                <img src="images/b1.jpg" alt="Product Image" class="w-[285px] h-[422px] mx-auto object-cover">
            </div>
            <div class="flex flex-col ml-6">
                <a href="#" class="text-blue-500">Visit the doubgood Store</a>
                <h1 class="mt-2 text-lg font-bold">doubgood Gold Beaded Bracelets for Women, Stackable Gold Bracelets for Women Men 14K Real Gold Plated Stretch Bead Ball Bracelet with Letter Pendant</h1>
                <div class="flex flex-row mt-2">
                    <rating class="mr-4">rating no</rating>
                    <rating class="mr-4">rating in star</rating>
                    <rating>number of rating user</rating>
                </div>
                <div class="mt-2 text-sm text-gray-500">1K+ bought in past month</div>
                <div class="mt-2 text-lg font-bold text-red-500">$15.98</div>
                <div class="mt-2 flex items-center">
                    <label class="mr-2">Coupon:</label>
                    <input type="checkbox" class="mr-2">
                    <p>Apply 20% coupon</p>
                </div>
                <div class="mt-2 flex items-center">
                    <button class="px-4 py-2 bg-yellow-500 text-white rounded mr-2">Redeem</button>
                    <p class="mr-2">Save 6% on 3 select item(s) promo code:</p>
                    <code>SSDUU3QQ</code>
                </div>
                <div class="mt-2">
                    <label for="color" class="block">Color</label>
                    <select id="color" name="color" class="border rounded px-2 py-1">
                        <option value="Gold-M">Gold-M</option>
                        <option value="Red">Red</option>
                        <option value="Red">Red</option>
                        <option value="Red">Red</option>
                    </select>
                </div>
                <div class="mt-2">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="col-span-2 text-left">Product Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">Item Width</td>
                                <td class="py-1">0.3c</td>
                            </tr>
                            <tr>
                                <td class="py-1">Materials</td>
                                <td class="py-1">Copper</td>
                            </tr>
                            <tr>
                                <td class="py-1">Metal Type</td>
                                <td class="py-1">Copper</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h1 class="mt-2 font-bold">About this item</h1>
                <ul class="list-disc ml-5 mt-2">
                    <li>5 cups chopped Porcini mushrooms</li>
                    <li>1/2 cup of olive oil</li>
                    <li>3lb of celery</li>
                </ul>
                <div class="mt-2">
                    <a href="#" class="text-blue-500">Report an issue with this product or seller</a>
                    <br>
                    <a href="#" class="text-blue-500">See product specifications</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-6">
            <h1 class="text-xl font-bold">Amount</h1>
            <p class="mt-2">This item cannot be shipped to your selected delivery location. Please choose a different delivery location.</p>
            <p class="mt-2">Delivery Location</p>
            <h2 class="mt-2 text-green-500 font-bold">In Stock</h2>
            <section class="mt-2">
                <label for="quantity">Quantity</label>
                <select id="quantity" name="quantity" class="border rounded px-2 py-1 mt-1">
                    <option value="quantity1">Quantity 1</option>
                    <option value="quantity2">Quantity 2</option>
                    <option value="quantity3">Quantity 3</option>
                </select>
            </section>
            <button class="mt-2 px-4 py-2 bg-yellow-500 text-white rounded">Add to Cart</button>
        </div>
    </div>

    <div class="mt-6">
        <h1 class="text-xl font-bold">Other Products from This Brand</h1>
        <div class="flex mt-4">
            <div class="flex items-center space-x-4">
                <img src="images/b1.jpg" alt="Brand Product" class="w-24 h-[100px] object-cover">
                <div>
                    <h2 class="font-bold">Product Brand</h2>
                    <p>Save up to price on this</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-6">
        <h1 class="text-xl font-bold">Related Products</h1>
        <div class="flex space-x-4 mt-4">
            <div>
                <img src="images/b1.jpg" alt="Related Product" class="w-24 h-[100px] object-cover">
                <div class="mt-2">
                    <p>Limited Time Deal</p>
                    <p>Price: <span>$29</span></p>
                </div>
            </div>
            <div>
                <img src="images/b1.jpg" alt="Related Product" class="w-24 h-[100px] object-cover">
                <div class="mt-2">
                    <p>Limited Time Deal</p>
                    <p>Price: <span>$29</span></p>
                </div>
            </div>
            <div>
                <img src="images/b1.jpg" alt="Related Product" class="w-24 h-[100px] object-cover">
                <div class="mt-2">
                    <p>Limited Time Deal</p>
                    <p>Price: <span>$29</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <h1 class="text-xl font-bold">Looking for Specific Info?</h1>
        <input type="text" placeholder="Ask about this product" class="mt-2 border rounded px-4 py-2 w-full">
    </div>

    <div class="mt-6">
        <h1 class="text-xl font-bold">Top Reviews</h1>
        <div class="flex items-start mt-4">
            <img class="h-16 w-16 object-cover rounded-full" src="images/b1.jpg" alt="User Profile Picture">
            <div class="ml-4">
                <p class="font-bold">User Username</p>
                <review>in star</review>
                <reviewDate>review in date</reviewDate>
                <p class="mt-2">Best product in the world</p>
                <div class="flex space-x-2 mt-2">
                    <button class="px-4 py-2 bg-green-500 text-white rounded">Helpful</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded">Not Helpful</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <div class="border border-black bg-black rounded-full h-3 w-3"></div> <!-- Half-width -->
        <div class="border border-black bg-red h-7 w-1/3 mt-4"></div> <!-- One-third width -->
        <div class="border border-black bg-red h-7 w-64 mt-4"></div> <!-- Fixed width (16rem) -->
        <ul class="list-none mt-4">
            <li class="flex items-start">
                <span class="text-3xl leading-none">•</span>
                <span class="ml-2">Point 1</span>
            </li>
            <li class="flex items-start mt-2">
                <span class="text-3xl leading-none">•</span>
                <span class="ml-2">Point 2</span>
            </li>
            <li class="flex items-start mt-2">
                <span class="text-3xl leading-none">•</span>
                <span class="ml-2">Point 3</span>
            </li>
        </ul>
    </div>
</body>
