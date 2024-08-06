<body>
    <div class=" bg-gray-500  p-4 flex justify-between text-xs md:text-base sm:text-sm">
        <div class="flex space-x-4">
            <a href="/" ><div class="w-28 h-10 flex justify-center items-center "><p class="">E-commerce</p><span class="text-white">.in</span></div></a>
            <p class="hidden  sm:justify-center sm:flex sm:items-center ">Add your address</p>
            <form action="/searchproduct" class="flex gap-x-2">
                @csrf
                <input class="w-36 sm:w-64" type="text" placeholder="Search product" name="search"><button class="hover:border border-gray-700">search</button>
            </form>
            <div class="text-white  flex justify-center items-center">
                @if(Auth::check())
                <a href="/profile" >Profile</a>
                @else
                <a href="/signin" >SignIn</a>
                @endif
            </div>
            <a href="/returnOrder" class="text-white flex justify-center items-center ">Return Orders</a>
        </div>
        <div class="w-20 h-10 flex ">            
            <div class=" relative"><img class="w-14 h-10 text-white"  src="images/amazon cart logo.png" alt="">
            <div class="absolute bottom-[16px] left-[19px] font-bold text-white">1</div>
            </div>        
        </div>
    </div>
<nav class=" bg-gray-200 p-4 flex justify-between text-xs md:text-base sm:text-sm">
    <div class=" flex items-center">
        <a href="">
        <div class="flex items-center space-x-2">
            <p class="text-gray-700 hover:text-blue-500">All</p>
        </div>
    </a>
    </div>
    <div class="">
        <ul class="flex space-x-4">
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Today's Deal</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Customer Service</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Registry</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Gift Cards</a></li>
            <li><a href="/sellerPage" class="text-gray-700 hover:text-blue-500">Sell</a></li>
        </ul>
    </div>
    <div class="">
        <span class="text-gray-700">Events Special</span>
    </div>

</nav>