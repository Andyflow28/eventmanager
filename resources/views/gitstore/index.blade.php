@extends('app')

@section('content')

<div class="flex flex-col text-center">
    <h2 class="text-4xl text-orange-400 md:my-10">The Best e-Commerce</h2>
    <div class="flex flex-wrap justify-center md:mb-20 md:mt-10">
        @for ($i = 1; $i <=12; $i++) <div class="w-44 md:w-56 flex md:mx-10 flex-col justify-center border-2 border-orange-400 text-center my-5 mx-1 md:items-center">
            <div class="img-product bg-no-repeat bg-cover bg-right"></div>
            <p class="text-violet-700 mt-1">Product title</p>
            <div class="flex items-center justify-between">
                <div class="container w-16 h-3 flex ml-1 mr-auto">
                    <img src="{{ asset('img/product/start.png') }}" alt="start" class="w-full h-full">
                    <img src="{{ asset('img/product/start.png') }}" alt="start" class="w-full h-full">
                    <img src="{{ asset('img/product/start.png') }}" alt="start" class="w-full h-full">
                    <img src="{{ asset('img/product/start.png') }}" alt="start" class="w-full h-full">
                    <img src="{{ asset('img/product/start.png') }}" alt="start" class="w-full h-full">
                </div>
                <div class="md:ml-24">
                    <span class="mr-1 text-green-500">$3</span>
                </div>
            </div>
            <div class="flex flex-col md:w-5/6 w-full text-center md:mb-4">
                <a href="#" class="bg-white border-orange-400 border-2 px-7 py-0 rounded-lg text-orange-400 mt-2">ADD TO CAR</a>
                <a href="#" class="bg-orange-400 px-7 md:px-0 py-0 rounded border-2 border-orange-400 text-white mt-2">BUY NOW</a>
            </div>
    </div>
    @endfor

</div>
</div>




<style>
    .img-product {
        background-image: url("{{ asset('img/product/product1.jpg') }}");
        width: 172px;
        height: 112px;
    }

    @media (min-width: 768px) {
        .img-product {
            width: 220px;
            height: 200px;
        }
    }
</style>

@endsection