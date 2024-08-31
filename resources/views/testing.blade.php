@extends('layouts.home')
@section('title','ecommerce')
@section('navbar')
    <x-nav-bar-component></x-nav-bar-component>
@endsection

@section('category')
<div class="category grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-y-5 justify-items-center mb-5 border border-black font-bold">
    <div class="gamingCategory  w-[322px] h-[420px] border-black border bg-white text-gray-500">

        <h1 class="p-4"></h1>
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
        </div>
    </div>
    <div class="fashion  w-[322px] h-[420px] border-black border  bg-white text-gray-500">
        <h1 class="p-4 ">Shop deals in Fashion</h1>
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
        </div>
    </div>
    <div class="fashion  w-[322px] h-[420px] border-black border  bg-white text-gray-500">
        <h1 class="p-4">Refresh your space</h1>
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
        </div>
    </div>



    <div class="PCs w-[322px] h-[420px] border-black border  bg-white text-gray-500">
        <h1 class="p-4">Deals in PCs</h1>
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
        </div>
    </div>
    <div class="fashion  w-[322px] h-[420px] border-black border  bg-white text-gray-500">
        <h1 class="p-4">Toys under $25</h1>
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
        </div>
    </div>
    <div class="fashion  w-[322px] h-[420px] border-black border  bg-white text-gray-500">
        <h1 class="p-4">Amazon Gadget Store</h1>
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
            <div><img src="" alt="" class="w-[130px] h-[116px]"><p>item2</p></div>
        </div>
    </div>
</div>

<div class="bg-white text-gray-500 w-full h-[282px]  border border-blue-800 font-bold">
    <h1 class="border border-black p-4">Best selling books</h1>
    <div class=" flex flex-row overflow-x-auto snap-x ml-6 border border-red-500 justify-between">
        <div class="mr-4">
            <img class="w-[133px] h-[200px] border border-black" src="image1.jpg" alt="Image 1">
        </div>

        <div>
            <img class="w-[133px] h-[200px] " src="image2.jpg" alt="Image 2">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image3.jpg" alt="Image 3">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image4.jpg" alt="Image 4">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image5.jpg" alt="Image 5">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image6.jpg" alt="Image 6">
        </div>
        <div>
            <img class="w-[133px] h-[200px]" src="image7.jpg" alt="Image 7">
        </div>
    </div>
</div>


@endsection
@section('footer')
    <x-footer></x-footer>
@endsection

