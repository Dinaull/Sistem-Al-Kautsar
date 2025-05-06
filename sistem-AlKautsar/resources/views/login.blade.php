@extends('layouts.app')
@section('Si-Sar', 'Login')

@section('content')
<div class="login">
    <h2>Log in</h2>
    <form action="{{route('login.data')}}" method="POST">
        @csrf
        <label for="">Username : </label>
        <input type="text" name="username">
        <br>
        <br>
        <label for="">password : </label>
        <input type="text" name="password">
        <br>
        <br>
        <button type="submit" class="button">log in</button>
    </form>
</div>
@endsection
