@extends('layouts.app')
@section('Si-Sar', 'Ubah Siswa')

@section('content')
<div style="padding: 20px; max-width: 600px; margin: auto;">
    <h2 style="margin-bottom: 20px;">Ubah Data Siswa</h2>
    <form action="{{ route('pengelolaan.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}" class="form-control" required><br>

        <label>Nama Pendek</label>
        <input type="text" name="nama_pendek" value="{{ $siswa->nama_pendek }}" class="form-control" required><br>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control" required><br>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control" required><br>

        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control" required><br>

        <label>Kelas</label>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control" required><br>

        <button type="submit" class="button">Update</button>
    </form>
</div>
@endsection
