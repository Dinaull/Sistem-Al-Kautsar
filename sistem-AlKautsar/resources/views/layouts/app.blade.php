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

<style>
    .form-control {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .button {
        background-color: #FFE07F;
        color: #000;
        padding: 8px 16px;
        border: none;
        font-weight: bold;
        border-radius: 4px;
        cursor: pointer;
    }

    .button:hover {
        background-color: #e6c966;
    }
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .pagination li {
        margin: 0 4px;
    }

    .pagination li a,
    .pagination li span {
        display: inline-block;
        padding: 6px 12px;
        background-color: #FFE07F;
        color: #333;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
    }

    .pagination li.active span {
        background-color: #FACC15;
        font-weight: bold;
    }

    .pagination li.disabled span {
        background-color: #ddd;
        color: #999;
    }
</style>

