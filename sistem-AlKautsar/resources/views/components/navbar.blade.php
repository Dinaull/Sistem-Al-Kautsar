<style>
    .navbar{
        background-color:#FFE07F;
        width:100%;
        padding: 10px;
        top: 0;
        left: 0;
        margin: 0;
        position: fixed;
        display:flex;
        gap: 30px;
    }

    .logo{
        position:relative;
        max-width: 120px;
        cursor: pointer;
    }

    .navbar a{
        font-weight: bold;
        color: #000000;
        cursor: pointer;
    }

    .navbar a:hover{
        color: #645858;
    }

    .logo{
        cursor: pointer;
    }
</style>
<nav class="navbar">
    <a href="{{ route('dashboard', ['username' => request('username')]) }}"><img src="{{asset('logo.png')}}" width="60" height="20" class="logo"></a>
    <a href="{{ route('dashboard', ['username' => request('username')]) }}">Dashboard</a>
    <a href="{{ route('pengelolaan.index', ['username' => request('username')]) }}">Pengelolaan</a>
    <a href="{{ route('profile', ['username' => request('username')]) }}">Profile</a>
</nav>
