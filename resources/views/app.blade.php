<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- to jest nasz templat i przekazujemy go dalej ,@yield('title') mozemy uzyc w poszczegulnych widokach  --}}
</head>
<body>
    @include('nav')
{{-- dzieki include mozemy przenies menu do pliku  resources\views\nav.blade.php--}}

    @yield('content')
</body>
</html>