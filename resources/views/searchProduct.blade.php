@extends('layouts.searchDisplay')
@section('title','ecommerce')
@section('navbar')
    <x-nav-bar-component></x-nav-bar-component>
@endsection
@section('searchResult')
@foreach ($products as $product)
<form action="{{ route('carts.store') }}" class="mb-2" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
        <div class="flex flex-row justify-start items-start w-[906px] h-[261px] border border-gray-200 mb-4 ">
            <div class="w-[294px] h-[261px] flex justify-center items-center bg-gray-100">
                <img class="w-auto ml-auto mr-auto mt-auto" src="{{'storage/' . $product->image}}" alt="Product Image">
            </div>
            <div class="flex flex-col justify-start items-start w-[604px] h-[218px] p-1">
                <h1 class="w-[584px] h-[48px]">{{$product->name}}</h1>
        <div class="flex flex-row  border border-black justify-start w-56">
            <p class=" h-[18px]">Review Star:</p>
            <span>stars number</span>
        </div>
        <p class="w-[175px] h-[18px]">Total Buyers</p>
        <p class="w-[49px] h-[35px] text-red-500 text-xl font-bold">{{$product->price}}</p>
           <button class="w-[89px] h-[31px] rounded-xl border border-black mt-2"  type="submit">Add to Cart</button> 
            </div>
        </div>
    </form> 
    <form action="{{ route('buy.store') }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
    <button class="w-[89px] h-[31px] rounded-xl border border-black mt-2" type="submit">BUY</button>
    </form>
@endforeach
@endsection
@section('filter')
<x-filter></x-filter>
@endsection
@section('sidebarCart')
<x-cartSideBar></x-cartSideBar>
@endsection