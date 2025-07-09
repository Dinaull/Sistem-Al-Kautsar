<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::paginate(7);
        return view('pengelolaan.index', compact('siswas'));
    }

    public function create()
    {
        return view('pengelolaan.create');
    }

    public function store(Request $request)
    {
        Siswa::create($request->all());
        return redirect()->route('pengelolaan.index');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('pengelolaan.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect()->route('pengelolaan.index');
    }

    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect()->route('pengelolaan.index');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
            $siswas = Siswa::where('nama_lengkap', 'like', "%{$query}%")
                ->orWhere('nama_pendek', 'like', "%{$query}%")
                ->orWhere('kelas', 'like', "%{$query}%")
                ->get();

            return view('pengelolaan.table', compact('siswas'))->render();
        }

        return response('', 400);
    }
}
