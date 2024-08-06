<x-header-component></x-header-component>
<x-nav-bar-component></x-nav-bar-component>
<body>
    <h1 class="text-gray-500 justify-center items-center">products</h1>
    <div class="flex flex-row border border-black justify-around mt-2">
        <div class="items-start w-4/5">
            <div class=" grid grid-cols-1 gap-y-5 ">
                <div class="border border-black h-52"></div>
                <div class="border border-black h-52"></div>
            </div>
            <h2 class="text-black">total </h2><span class="text-black">34</span>
        </div>
        <div>
            <x-cartSideBar></x-cartSideBar>
        </div>
    </div>
        <x-footer></x-footer>

