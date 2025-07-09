@extends('layouts.app')

@section('content')
<div style="max-width: 1000px; margin: 80px auto 50px; padding: 20px;">
    <h2 style="margin-bottom: 20px;">Data Siswa Al-Kautsar</h2>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
        <form>
            <input type="text" id="search" placeholder="Cari siswa..."
                style="padding: 8px; border-radius: 5px; border: 1px solid #ccc; width: 250px;">
        </form>
        <a href="{{ route('pengelolaan.create') }}">
            <button type="button" style="padding: 8px 15px; background-color: #FFE07F; border: none; border-radius: 5px; font-weight: bold;">
                + Tambah Siswa
            </button>
        </a>
    </div>

    <div id="table-container" style="overflow-x: auto;">
        @include('pengelolaan.table', ['siswas' => $siswas])
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('search').addEventListener('keyup', function () {
        const query = this.value;
        fetch(`/pengelolaan/search?query=${query}`)
            .then(response => {
                if (!response.ok) throw new Error("Gagal fetch");
                return response.text();
            })
            .then(data => {
                document.getElementById('table-container').innerHTML = data;
            })
            .catch(err => console.error(err));
    });
</script>
@endsection
