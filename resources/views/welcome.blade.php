@extends('layouts.home')

@section('title','ecommerce')

@section('navbar')
    <x-nav-bar-component></x-nav-bar-component>
@endsection

@section('category')
<div class="h-auto w-[1349px] flex justify-center">
    <div class=" ">
        {{-- Category Section --}}
        <div class="category grid w-[1329px] h-auto text-black text-sm grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center mb-5 font-bold">
            @php
                $datas = [
                    'Gaming Category',
                    'Refresh your space',
                    'Toys under $25',
                    'New Arrivals',
                    'Best Sellers',
                    'Tech Gadgets',
                    'Home Essentials',
                    'Kids Favorites'
                ];

                $items = [
                    'Gaming Category',
                    'Refresh your space',
                    'Toys under $25',
                    'New Arrivals',

                ];
            @endphp

            @foreach ($datas as $data)
                <div class="gamingCategory w-[322px] h-[420px]   bg-white text-gray-500 px-2 mb-4">
                    <h1 class="p-4">{{$data}}</h1>
                    <div class="grid grid-cols-2 gap-4 justify-items-center">
                        @for ($i = 0; $i < 4; $i++)
                            <div>
                                <img src="" alt="" class="w-[130px] h-[116px]">
                                <p>Item {{$i + 1}}</p>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Best Selling Books Section --}}
        @php
        $images = [
    ['src' => 'image1.jpg', 'alt' => 'Image 1'],
    ['src' => 'image2.jpg', 'alt' => 'Image 2'],
    ['src' => 'image3.jpg', 'alt' => 'Image 3'],
    ['src' => 'image4.jpg', 'alt' => 'Image 4'],
    ['src' => 'image5.jpg', 'alt' => 'Image 5'],
    ['src' => 'image6.jpg', 'alt' => 'Image 6'],
    ['src' => 'image7.jpg', 'alt' => 'Image 7'],
    ['src' => 'image8.jpg', 'alt' => 'Image 8'],
    ['src' => 'image9.jpg', 'alt' => 'Image 9'],
    ['src' => 'image10.jpg', 'alt' => 'Image 10']
];
        @endphp
        <div class="bg-white text-gray-500 w-[1329px]   font-bold">
            <div>

                <div class="bg-white text-gray-500 w-[1309px] h-[281.5px] mb-[20px]   font-bold">
                    <h1 class="  p-4">Best Selling Books</h1>
                    <div class="flex flex-row overflow-x-auto snap-x ml-6   justify-between">
                        @foreach ($images as $image)

                        <div class="mr-4">
                            <img class="w-[133px] h-[200px]  " src="{{$image['src']}}" alt=" {{$image['alt']}}">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="bg-white text-gray-500 w-[1309px] h-[281.5px] mb-[20px]   font-bold">
                    <h1 class="  p-4">Second best sell</h1>
                    <div class="flex flex-row overflow-x-auto snap-x ml-6   justify-between">
                        @foreach ($images as $image)

                        <div class="mr-4">
                            <img class="w-[133px] h-[200px]  " src="{{$image['src']}}" alt=" {{$image['alt']}}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <div class="category grid  text-black text-sm grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center mb-5 font-bold">

                @foreach ($items as $data)
                <div class="gamingCategory w-[322px] h-[420px]   bg-white text-gray-500 px-2 mb-4">
                    <h1 class="p-4">{{$data}}</h1>
                    <div class="grid grid-cols-2 gap-4 justify-items-center">
                        @for ($i = 0; $i < 4; $i++)
                        <div>
                            <img src="" alt="" class="w-[130px] h-[116px]">
                            <p>Item {{$i + 1}}</p>
                        </div>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>

<div>
    <div class="bg-white text-gray-500 w-full h-[281.5px] mb-[20px]   font-bold">
        <h1 class="  p-4">Popular items this season</h1>
        <div class="flex flex-row overflow-x-auto snap-x ml-6   justify-between">
            @foreach ($images as $image)

            <div class="mr-4">
                <img class="w-[133px] h-[200px]  " src="{{$image['src']}}" alt=" {{$image['alt']}}">
            </div>
            @endforeach

        </div>
    </div>
    <div class="bg-white text-gray-500 w-full h-[281.5px] mb-[20px]   font-bold">
        <h1 class="  p-4">Movies</h1>
        <div class="flex flex-row overflow-x-auto snap-x ml-6   justify-between">
            @foreach ($images as $image)

            <div class="mr-4">
                <img class="w-[133px] h-[200px]  " src="{{$image['src']}}" alt=" {{$image['alt']}}">
            </div>
            @endforeach

        </div>
    </div>

    <div class="category grid w-[1329px] h-auto text-black text-sm grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center mb-5 font-bold">
        @foreach ($datas as $data)
        <div class="gamingCategory w-[322px] h-[420px]   bg-white text-gray-500 px-2 mb-4">
            <h1 class="p-4">{{$data}}</h1>
            <div class="grid grid-cols-2 gap-4 justify-items-center">
                @for ($i = 0; $i < 4; $i++)
                    <div>
                        <img src="" alt="" class="w-[130px] h-[116px]">
                        <p>Item {{$i + 1}}</p>
                    </div>
                @endfor
            </div>
        </div>
    @endforeach
    </div>
</div>

        </div>
    </div>
</div>
@endsection

{{-- Footer Section (Uncomment if needed) --}}
@section('footer')
    <x-footer></x-footer>
@endsection
