<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'tb_portofolio';
    protected $guarded = [];

    public function jenis_kegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class, 'jenis_kegiatan_id', 'id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'nim');
    }
}
