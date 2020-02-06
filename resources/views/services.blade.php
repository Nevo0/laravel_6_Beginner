@extends('app');
{{-- to jest rozszeżenie widoku app resources\views\app.blade.php --}}


@section('title', 'Services Page')
{{-- to jest to co poleci do widoku app w miejsce @yield('title') --}}

@section('content')
{{-- teraz do widoku w resources\views\app.blade.php w miejsce @yield('content') przekazujemy to co jest w srodku --}}
    <h1>Services page</h1>
    <ul>
        {{-- dzieki funckii compact odbieramy dane w widoku --}}
        @foreach($data as $service)
        <li>{{$service}}</li>
        @endforeach
        <br>
        @forelse ($data as $service)
        
        {{-- /dzieki forelse  mamy dostem gdy jest pusty --}}
        <li>{{$service}}</li>
        @empty
        <li> No services available.</li>    
        @endforelse
        


    </ul>
@endsection

<?dd($data)
