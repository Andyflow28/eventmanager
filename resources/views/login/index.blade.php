<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
</head>

<body>

    <a href="/"><img src="{{ asset('img/login/arrow.png') }}" alt="icon android" class="w-10 h-10 m-5 md:w-14 md:h-14"></a>
    @yield('content')
    
</body>

</html>