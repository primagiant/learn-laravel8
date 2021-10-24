<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKegiatan extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori_kegiatan';
    protected $guarded = [];

    public function jenis_kegiatan()
    {
        return $this->hasMany(JenisKegiatan::class, 'kategori_kegiatan_id', 'id');
    }
}
