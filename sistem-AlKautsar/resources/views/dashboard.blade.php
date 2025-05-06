@extends('layouts.app')
@section('Si-Sar', 'dashboard')

@section('content')
<div class='dashboard'>
    <h2 style="margin-bottom: 0px;">Welcome {{request('username')}}!</h2>
    <p style="font-size: 12px; margin-top: 0px;">di Sistem Informasi Al-Kautsar</p>

    <div class='gambar'>
        <img src="{{asset('Group 3.png')}}" class="gambar1">
        <img src="{{asset('Group 4.png')}}" class="gambar1">
    </div>
    <div class='gambare'>
        <img src="{{asset('Group 5.png')}}" class="gambar2">
        <img src="{{asset('Group 6.png')}}" class="gambar2">
        <img src="{{asset('Group 7.png')}}" class="gambar2">
    </div>
</div>
@endsection
