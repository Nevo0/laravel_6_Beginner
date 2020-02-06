@extends('app');
{{-- to jest rozszeżenie widoku app resources\views\app.blade.php --}}


@section('title', 'About Us Page')
{{-- to jest to co poleci do widoku app w miejsce @yield('title') --}}

@section('content')
{{-- teraz do widoku w resources\views\app.blade.php w miejsce @yield('content') przekazujemy to co jest w srodku --}}
    <h1>About page</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas quo minus doloribus, perferendis saepe nihil optio consectetur vero harum quas eaque nulla, aperiam deleniti asperiores quod! Voluptate architecto ducimus rerum.</p>
@endsection


