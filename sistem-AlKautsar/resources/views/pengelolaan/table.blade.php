<table style="width: 100%; border-collapse: collapse; background-color: #fff;">
    <thead style="background-color: #FFE07F;">
        <tr>
            <th style="padding: 10px;">Nama Lengkap</th>
            <th style="padding: 10px;">Nama Pendek</th>
            <th style="padding: 10px;">Tempat Lahir</th>
            <th style="padding: 10px;">Tanggal Lahir</th>
            <th style="padding: 10px;">Alamat</th>
            <th style="padding: 10px;">Kelas</th>
            <th style="padding: 10px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswas as $siswa)
        <tr>
            <td style="padding: 8px;">{{ $siswa->nama_lengkap }}</td>
            <td style="padding: 8px;">{{ $siswa->nama_pendek }}</td>
            <td style="padding: 8px;">{{ $siswa->tempat_lahir }}</td>
            <td style="padding: 8px;">{{ $siswa->tanggal_lahir }}</td>
            <td style="padding: 8px;">{{ $siswa->alamat }}</td>
            <td style="padding: 8px;">{{ $siswa->kelas }}</td>
            <td style="padding: 8px;">
                <a href="{{ route('pengelolaan.edit', $siswa->id) }}" style="color: blue; margin-right: 5px;">Ubah</a>
                <form action="{{ route('pengelolaan.destroy', $siswa->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red; border: none; background: none; cursor: pointer;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination-wrapper">
    {{ $siswas->links('pagination::bootstrap-5') }}
</div>
