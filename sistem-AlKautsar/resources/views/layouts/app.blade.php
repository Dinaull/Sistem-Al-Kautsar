<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Si-Sar')</title>
    <link rel="stylesheet" href="{{ asset('apps.css') }}">
</head>
<body>
    @if (!Request::is('/') && !Request::is('login'))
        <x-navbar />
    @endif
    <div>
        <main>
            @yield('content')
        </main>
    </div>

    @if (!Request::is('/') && !Request::is('login'))
        <x-footer />
    @endif

</body>
</html>
