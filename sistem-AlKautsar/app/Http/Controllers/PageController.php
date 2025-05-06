<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request){
        return view('login');
    }
    public function logindata(Request $request){
        $username = $request->input('username');
        return redirect()->route('dashboard',['username' => $username]);
    }
    public function dashboard(Request $request){
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }
    public function profile(Request $request){
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
    public function pengelolaan(){
        $data = [
            ["Nama Lengkap" => "Andrea Hirata", "Nama Pendek" => "Andrea", "Tempat Lahir" => "Gresik", "Tanggal Lahir" => "24 Oktober 2019", "Alamat" => "Sungonlegowo", "Kelas" => "TK B"],
            ["Nama Lengkap" => "Na Jaemin", "Nama Pendek" => "Nana", "Tempat Lahir" => "Gresik", "Tanggal Lahir" => "19 Agustus 2020", "Alamat" => "Indrodelik", "Kelas" => "TK B"],
            ["Nama Lengkap" => "Esok Bahtera", "Nama Pendek" => "Soke", "Tempat Lahir" => "Lamongan", "Tanggal Lahir" => "14 Februari 2021", "Alamat" => "Indrodelik", "Kelas" => "TK A"],
            ["Nama Lengkap" => "Abhinaya Hanasta Cyntia", "Nama Pendek" => "Naya", "Tempat Lahir" => "Surabaya", "Tanggal Lahir" => "10 Februari 2021", "Alamat" => "Bungah", "Kelas" => "TK A"],
            ["Nama Lengkap" => "Skylia Gabriel", "Nama Pendek" => "Sky", "Tempat Lahir" => "Surabaya", "Tanggal Lahir" => "19 Mei 2022", "Alamat" => "Sungonlegowo", "Kelas" => "PAUD"]
        ];
        return view('pengelolaan', compact('data'));
    }
}
