<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama_lengkap', 'nama_pendek', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'kelas'];
}
