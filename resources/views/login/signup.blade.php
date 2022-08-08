@extends('login.index')

@section('content')

<div class="flex flex-col items-center">
    <div class="bg-cyan-700 mx-5 mt-10 rounded-lg md:w-3/6">
        <form class="flex flex-col">
            <h2 class="text-white text-3xl md:text-4xl mx-auto my-5 md:mb-8 md:mt-10">Sign Up</h2>
            <div class="flex flex-col">
                <label for="User_Name" class="text-white mx-5 md:mx-36 md:my-5">User Name</label>
                <input type="text" id="User_Name" class="rounded-3xl px-3 mx-5 md:mx-36 md:py-1">
            </div>
            <div class="flex flex-col">
                <label for="exampleInputEmail1" class="text-white mx-5 md:mx-36 md:my-5 my-3">Email address</label>
                <input type="email" class="rounded-3xl px-3 mx-5 md:mx-36 md:py-1" id="exampleInputEmail1">
                <div id="emailHelp" class="text-white md:text-sm text-xs mx-5 md:mx-36 my-3">We'll never share your email with anyone else.</div>
            </div>
            <div class="flex flex-col my-1">
                <label for="exampleInputPassword1" class="text-white mx-5 md:mx-36 md:my-5">Password</label>
                <input type="password" id="exampleInputPassword1" class="rounded-3xl px-3 mx-5 md:mx-36 md:py-1">
            </div>
            <div class="flex mx-5 my-5">
                <input type="checkbox" id="exampleCheck1" class="md:ml-32">
                <label for="exampleCheck1" class="text-white ml-2">Send News Oferts</label>
            </div>
            <button type="submit" class="text-white bg-violet-700 mx-16 py-3 mt-2 rounded-xl mb-8 md:mx-36 md:mb-16">Sign Up</button>
        </form>
    </div>

    <div class="bg-cyan-700 h-20 md:h-28 md:w-96 w-80 mx-5 mt-24 rounded-lg">
        <p class="p-auto m-2 text-sm text-white md:text-base md:my-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error odit dolor doloribus officiis a ea perferendis architecto minima con</p>
    </div>
</div>

@endsection