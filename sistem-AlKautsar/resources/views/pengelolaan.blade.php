@extends('layouts.app')
@section('Si-Sar', 'Pengelolaan')

@section('content')
<div class='pengelolaan'>
    <h2>Data Siswa Al-Kautsar</h2>
    <table>
        <thead>
            <th>Nama Lengkap</th>
            <th>Nama Pendek</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
            <th>Kelas</th>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item['Nama Lengkap']}}</td>
                <td>{{$item['Nama Pendek']}}</td>
                <td>{{$item['Tempat Lahir']}}</td>
                <td>{{$item['Tanggal Lahir']}}</td>
                <td>{{$item['Alamat']}}</td>
                <td>{{$item['Kelas']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
