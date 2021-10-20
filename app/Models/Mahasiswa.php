<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $guarded = [];

    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class, 'angkatan_id', 'id');
    }

    public function pa()
    {
        return $this->belongsTo(PembimbingAkademik::class, 'pa_id', 'id');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
