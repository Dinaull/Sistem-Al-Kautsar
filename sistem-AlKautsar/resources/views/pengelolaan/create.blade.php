@extends('layouts.app')
@section('Si-Sar', 'Tambah Siswa')

@section('content')
<div style="padding: 20px; max-width: 600px; margin: auto;">
    <h2 style="margin-bottom: 20px;">Tambah Data Siswa</h2>
    <form action="{{ route('pengelolaan.store') }}" method="POST">
        @csrf
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" required><br>

        <label>Nama Pendek</label>
        <input type="text" name="nama_pendek" class="form-control" required><br>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" required><br>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" required><br>

        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" required><br>

        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" required><br>

        <button type="submit" class="button">Simpan</button>
    </form>
</div>
@endsection
