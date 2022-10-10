<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('metaTitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>


<body>
    <!-- ciò visualizza l'utente -->

    {{-- sidebar --}}

    @include('partials.sidebar')

     {{-- header --}} 

    @include('partials.header')

    <main>

        @yield('content')

        @include('partials.main')
    
    </main>

     {{-- footer --}}

    @include('partials.footer')
</body>
</html>
