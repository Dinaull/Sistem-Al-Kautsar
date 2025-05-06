@extends('layouts.app')
@section('Si-Sar', 'Profile')

@section('content')
<div class="profil">
    <h2>Profile Pengguna</h2>
    <label>Username:</label>
    <br>
    <p>{{$username}}</p>
    <br>
    <label>Nama Lengkap:</label>
    <br>
    <p style="color: rgb(97, 94, 94)">Masukkan nama lengkap</p>
    <br>
    <label>Password :</label>
    <br>
    <p>*****</p>
</div>
@endsection
