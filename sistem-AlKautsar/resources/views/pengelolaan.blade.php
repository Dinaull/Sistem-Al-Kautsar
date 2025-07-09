{{-- @extends('layouts.app')
@section('Si-Sar', 'Pengelolaan')

@section('content')
<h2>Data Siswa Al-Kautsar</h2>
<a href="{{ route('siswa.create') }}">+ Tambah Data</a>
<table>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Nama Pendek</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ $siswa->nama_lengkap }}</td>
            <td>{{ $siswa->nama_pendek }}</td>
            <td>{{ $siswa->tempat_lahir }}</td>
            <td>{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->translatedFormat('d F Y') }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>
                <a href="{{ route('siswa.edit', $siswa->id) }}">Ubah</a>
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection --}}
