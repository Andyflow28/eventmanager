<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Nav Bar -->
    <div x-data="data()">
        <div class="bg-cyan-700 flex w-full py-4 items-center px-5 justify-between">
            <img src="{{ asset('img/navegacion.png') }}" alt="menu icon" class="md:hidden w-14" x-on:click="isOpen()">
            <div class="flex">
                <a href="/" class="text-white hidden md:inline ml-2 hover:text-cyan-100">Home</a>
                <a href="{{ route('blog') }}" class="text-white hidden md:inline ml-10 hover:text-cyan-100">Blog</a>
                <a href="{{ route('about') }}" class="text-white hidden md:inline ml-10 hover:text-cyan-100">About Us</a>
            </div>
            <div class="flex items-center">
                <a href="{{ route('in') }}" class="text-white hidden md:inline ml-10 hover:text-cyan-100">Sign in</a>
                <a href="{{ route('up') }}" class="text-white hidden md:inline ml-5 px-3 py-1 hover:text-cyan-700 transition duration-500 rounded border-2 border-white hover:bg-white">Sign up</a>
            </div>
            <img src="{{ asset('img/search.png') }}" alt="search icon" class="w-10 md:hidden" x-on:click="isOpenSearch()">
        </div>

        <div class="h-32 bg-violet-900 flex items-center
        justify-center md:hidden" x-on:click.away="closeSearch()" x-show="openSearch">
            <input type="text" class="h-14 w-9/12 text-4xl">
        </div>

        <div class="bg-cyan-900 w-full flex flex-col md:hidden items-center h-52" x-show="open" x-on:click.away="close()">
            <a href="{{ route('products') }}" class="text-white hover:text-cyan-100 my-2">Home</a>
            <div class="bg-slate-400 h-px w-full"></div>
            <a href="{{ route('blog') }}" class="text-white hover:text-cyan-100 my-2">Blog</a>
            <div class="bg-slate-400 h-px w-full"></div>
            <a href="{{ route('about') }}" class="text-white hover:text-cyan-100 my-2">About Us</a>
            <div class="bg-slate-400 h-px w-full"></div>
            <a href="{{ route('in') }}" class="text-white hover:text-cyan-100 my-2">Sign in</a>
            <div class="bg-slate-400 h-px w-full"></div>
            <a href="{{ route('up') }}" class="text-white hover:text-cyan-100 my-2">Sign up</a>
        </div>
    </div>


    <!-- End Nav Bar -->

    <!-- Search Primary -->
    <div class="h-32 bg-violet-900 hidden md:flex items-center justify-center">
        <input type="text" class="h-12 w-9/12 text-2xl rounded-full px-5">
        <img src="{{ asset('img/search.png') }}" alt="search icon" class="w-12 h-12 ml-2">
    </div>

    <!-- Bar -->

    <!-- Bar desktop -->
    <div class="md:flex flex-col hidden" x-data="data()">
        <img src="{{ asset('img/arrow-navegate.png') }}" alt="arrow" class="w-10 h-10 mx-auto my-5 md:hidden" x-on:click="isSelect()">
        <div class="bg-violet-900 flex items-center flex-col md:flex-row md:justify-around md:border-b-4 border-violet-900">

            <a href="{{ route('newofert') }}" x-on:click="isSelect5()" x-on:click.away="closeSelect5()" :class="{'text-white hover:text-cyan-500 my-2 md:my-0 md:py-5 md:text-2xl': select5, 'text-cyan-500 my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 md:text-2xl': !select5 }">
                New Ofert
            </a>

            <div class="bg-slate-400 h-px w-full md:hidden"></div>

            <a href="{{ route('products') }}" x-on:click="isSelect2()" x-on:click.away="closeSelect2()" :class="{'text-white hover:text-cyan-500 my-2 md:my-0 md:py-5 md:text-2xl': select2, 'my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 md:text-2xl text-cyan-500': !select2 }">Products</a>

            <div class="bg-slate-400 h-px w-full md:hidden"></div>

            <a href="{{ route('gitstore') }}" x-on:click="isSelect3()" x-on:click.away="closeSelect3()" :class="{'text-white hover:text-cyan-500 my-2 md:my-0 md:py-5 md:text-2xl': select3, 'text-cyan-500 my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 md:text-2xl': !select3 }">Git Store</a>

            <div class=" bg-slate-400 h-px w-full md:hidden"></div>

            <a href="#" x-on:click="isSelect1()" x-on:click.away="closeSelect1()" :class="{'flex my-2 md:my-0 md:items-center md:py-5': select1, 'md:items-center flex my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 text-cyan-700': !select1 }"><img src="{{ asset('img/shopCar.png') }}" alt="" class="w-8 h-8 hidden md:mr-1 md:block">
                <p :class="{'text-white hover:text-cyan-500 md:text-2xl': select1, 'text-cyan-500 md:text-2xl': !select1}">Shop Car</p>
            </a>
        </div>
    </div>

    <!-- Hero 

    <div class="w-full bg-no-repeat back bg-cover h-[40vw] md:flex items-center justify-center">
        <div class="bg-cyan-500 hidden md:h-[30vw] md:w-[70vw] md:flex justify-center items-center rounded-xl">
            <p class="text-white text-8xl">
                Get Out
            </p>
        </div>
    </div> -->

    <!-- Bar Movil -->

    <div class="flex flex-col md:hidden" x-data="data()">
        <img src="{{ asset('img/arrow-navegate.png') }}" alt="arrow" class="w-10 h-10 mx-auto my-5 md:hidden" x-on:click="isSelect()" x-show="!movil">
        <div x-show="movil" x-on:click.away="closeSelect()" class="bg-violet-900 flex items-center flex-col md:flex-row md:justify-around md:border-b-4 border-violet-900">

            <a href="{{ route('newofert') }}" x-on:click="isSelect5()" x-on:click.away="closeSelect5()" :class="{'text-white hover:text-cyan-500 my-2 md:my-0 md:py-5 md:text-2xl': select5, 'text-cyan-500 my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 md:text-2xl': !select5 }">
                New Ofert
            </a>

            <div class="bg-slate-400 h-px w-full md:hidden"></div>

            <a href="{{ route('products') }}" x-on:click="isSelect2()" x-on:click.away="closeSelect2()" :class="{'text-white hover:text-cyan-500 my-2 md:my-0 md:py-5 md:text-2xl': select2, 'my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 md:text-2xl text-cyan-500': !select2 }">Products</a>

            <div class="bg-slate-400 h-px w-full md:hidden"></div>

            <a href="{{ route('gitstore') }}" x-on:click="isSelect3()" x-on:click.away="closeSelect3()" :class="{'text-white hover:text-cyan-500 my-2 md:my-0 md:py-5 md:text-2xl': select3, 'text-cyan-500 my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 md:text-2xl': !select3 }">Git Store</a>

            <div class=" bg-slate-400 h-px w-full md:hidden"></div>

            <a href="#" x-on:click="isSelect1()" x-on:click.away="closeSelect1()" :class="{'flex my-2 md:my-0 md:items-center md:py-5': select1, 'md:items-center flex my-2 md:my-0 md:py-5 md:border-b-4 md:border-cyan-500 text-cyan-700': !select1 }"><img src="{{ asset('img/shopCar.png') }}" alt="" class="w-8 h-8 hidden md:mr-1 md:block">
                <p :class="{'text-white hover:text-cyan-500 md:text-2xl': select1, 'text-cyan-500 md:text-2xl': !select1}">Shop Car</p>
            </a>
        </div>
    </div>

    @yield('content')

    <footer class="bg-cyan-700">
        <div class="flex justify-around flex-wrap">
            <div class="flex flex-col items-start justify-start mx-10 my-3">
                <a href="{{ route('newofert') }}" class="text-2xl my-5 text-white">New Ofert</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
            </div>
            <div class="flex flex-col items-start justify-start mx-10 my-3">
                <a href="{{ route('products') }}" class="text-2xl my-5 text-white">Products</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
            </div>
            <div class="flex flex-col items-start justify-start mx-10 my-3">
                <a href="{{ route('gitstore') }}" class="text-2xl my-5 text-white">Git Store</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
            </div>
            <div class="flex flex-col items-start justify-start mx-10 my-3">
                <a href="#" class="flex my-5"><img src="{{ asset('img/footerCar.png') }}" alt="shop car" class="w-8 h-8 mr-1">
                    <p class="text-2xl text-white">Shop Car</p>
                </a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
                <a href="#" class="text-white my-1">Lorem ipsum dolor sit</a>
            </div>
        </div>

        <div class="flex justify-between md:flex-row flex-col-reverse items-center px-5 py-3">
            <div class="flex flex-start px-5 my-10">
                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="social media" class="w-10 h-10"></a>
                <a href="#"><img src="{{ asset('img/twitter.png') }}" alt="social media" class="w-10 h-10 ml-3"></a>
                <a href="#"><img src="{{ asset('img/instagram.png') }}" alt="social media" class="w-10 h-10 ml-3"></a>
                <a href="#"><img src="{{ asset('img/linkedin.png') }}" alt="social media" class="w-10 h-10 ml-3"></a>
            </div>
            <a href="#"><img src="{{asset('img/ecommerce.png')}}" alt="ecommerce icon" class="w-16 h-16 md:mt-0 mt-10"></a>
            <a href="#"><img src="{{ asset('img/home-icon.png') }}" alt="home icon" class="w-16 h-16 mt-10 md:mt-0"></a>
            <a href="#" class="md:m-8 py-5 px-8 bg-violet-900 text-white rounded-lg">E-SOCIAL</a>
        </div>

    </footer>

    <script>
        function data() {
            return {
                open: false,
                isOpen() {
                    this.open = !this.open
                },
                close() {
                    this.open = false
                },
                openSearch: false,
                isOpenSearch() {
                    this.openSearch = !this.openSearch
                },
                closeSearch() {
                    this.openSearch = false
                },
                select1: true,
                isSelect1() {
                    this.select1 = !this.select1
                },
                closeSelect1() {
                    this.select1 = true
                },
                select2: true,
                isSelect2() {
                    this.select2 = !this.select2
                },
                closeSelect2() {
                    this.select2 = true
                },
                select3: true,
                isSelect3() {
                    this.select3 = !this.select3
                },
                closeSelect3() {
                    this.select3 = true
                },
                select4: true,
                isSelect4() {
                    this.select4 = !this.select4
                },
                closeSelect4() {
                    this.select4 = true
                },
                select5: true,
                isSelect5() {
                    this.select5 = !this.select5
                },
                closeSelect5() {
                    this.select5 = true
                },
                movil: false,
                isSelect() {
                    this.movil = !this.movil
                },
                closeSelect() {
                    this.movil = false
                }
            }
        }
    </script>

    <style>
        .back {
            background-image: url("{{ asset('img/hero.jpg') }}");
        }
    </style>
</body>

</html>